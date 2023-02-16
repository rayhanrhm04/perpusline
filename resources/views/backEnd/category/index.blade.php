@extends('layouts.main')
@section('title', config('app.name'))
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    @can('category-delete')
                                    <div class="mt-2">
                                        <a href="#" class="hidden" id="btn-destroy"><i class="fa fa-trash text-red"></i></a>
                                    </div>
                                    @endcan
                                </div>
                            </div>
                            <div class="col-md-8">
                                @can('category-create')
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-create"><i class="nav-icon fa fa-plus"></i> Tambah Kategori</button>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="allCheckbox" class="form-control"></th>
                                        <th>Actions</th>
                                        <th>Judul</th>
                                        <th>Status</th>
                                        <th>Tanggal dibuat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                    <tr>
                                        <td><input type="checkbox" class="form-control checbox" value="{{ $category->id }}"></td>
                                        <td>
                                            @can ('category-edit')
                                            <a href="#" class="edit" data-url="{{ route('category.update', $category->id) }}" data-id="{{ $category->id }}" data-get="{{ route('category.show', $category->id) }}">
                                                <i class="fa fa-pen mr-3 text-dark"></i>
                                            </a>
                                            @endcan

                                            @can ('category-list')
                                            <a href="#" class="show" data-url="{{ route('category.show', $category->id) }}" data-id="{{ $category->id }}">
                                                <i class="fa fa-eye text-dark"></i>
                                            </a>
                                            @endcan
                                        </td>
                                        <td>{{ $category->title }}</td>
                                        <td>{!! $category->status == 1 ? "<span class='badge badge-success'>AKTIF</span>" : "<span class='badge badge-danger'>TIDAK AKTIF</span>" !!}</td>
                                        <td>{{ $category->created_at }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Tidak Ada</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('backEnd.category.create')
    @include('backEnd.category.edit')
    @include('backEnd.category.show')
    
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#allCheckbox').click(function(e) {
            let table = $(e.target).closest('table');
            if (this.checked) {
                $("#btn-destroy").removeClass("hidden");
            } else {
                $("#btn-destroy").addClass("hidden");
            }
            $('td input:checkbox', table).prop('checked', this.checked);
        });
        $('.checbox').click(function(e) {
            if ($('.checbox:checked').length == 0) {
                $("#btn-destroy").addClass("hidden");
            } else {
                $("#btn-destroy").removeClass("hidden");
            }
        });
        $('#btn-destroy').click(function(e) {
            let is_checked = $('.checbox:checked').length;
            if (is_checked > 0) {
                let arrId = []
                $('.checbox:checked').each(function(i) {
                    arrId.push($(this).val());
                });
                Swal.fire({
                    title: "Are you sure delete it?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    closeOnConfirm: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('category.destroy') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": arrId
                            },
                            success: function(response) {
                                if (response.status) {
                                    Swal.fire("Done!", "It was succesfully deleted!", "success").then(function() {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire("Error deleting!", "Please try again", "error").then(function() {
                                        location.reload();
                                    });
                                }
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                Swal.fire("Error deleting!", "Please try again", "error").then(function() {
                                    location.reload();
                                });
                            }
                        });
                    }
                });
            }
        });
        $('#table tbody').on('click', '.show', function() {
            var id = $(this).data('id');
            var url = $(this).data('url');
            $.ajax({
                    url: url,
                    type: 'GET',
                })
                .done(function(response) {
                    if (response.status) {
                        $('#id_show').text(response.data.id);
                        $('#title_show').text(response.data.title);
                        $('#desc_show').text(response.data.desc);
                        $('#log_show').text(response.data.created_at);
                        $('#modal-show').modal('show');

                    }
                })
                .fail(function() {
                    console.log("error");
                });
        });
        $('#table tbody').on('click', '.edit', function() {
            var id = $(this).data('id');
            var url = $(this).data('url');
            var url_hit = $(this).data('get');
            $.ajax({
                    url: url_hit,
                    type: 'GET',
                })
                .done(function(response) {
                    if (response.status) {
                        $('#title_edit').val(response.data.title);
                       

                        let option_status = "";
                        
                        let selected_aktif = response.data.status == 1 ? 'selected' : '';
                        let selected_tidak_aktif = response.data.status == 2 ? 'selected' : '';
                        option_status += "<option value='1' " + selected_aktif + ">Aktif</option>";
                        option_status += "<option value='2' " + selected_tidak_aktif + ">Tidak Aktif</option>";
                       
                        $('#status_edit').html(option_status);
                        $("#form-edit").attr('action', url);
                        $('#modal-edit').modal('show');


                    }
                })
                .fail(function() {
                    console.log("error");
                });
        });

    });
</script>
@endpush