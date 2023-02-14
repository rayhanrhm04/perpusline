@extends('layouts.main')
@section('title', config('app.name'))
@section('content')
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Price List</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Price List</li>
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
                                        @can('price-delete')
                                            <div class="mt-2">
                                                <a href="#" class="hidden" id="btn-destroy"><i class="fa fa-trash text-red"></i></a>
                                            </div>
                                        @endcan
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    @can('price-create')
                                        <a href="{{route('price.create')}}" class="btn btn-primary float-right ml-3"><i class="nav-icon fa fa-plus"></i>  Tambah Price List</a>
                                    @endcan
                                    <a href="#" class="btn btn-success float-right"><i class="nav-icon fa fa-download"></i>  Export Excel</a>
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
                                            <th>Merek</th>
                                            <th>Kategori</th>
                                            <th>Sub Kategori</th>
                                            <th>Price List</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6" class="text-center">Data Tidak Ada</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#allCheckbox').click(function(e){
            let table= $(e.target).closest('table');
            if(this.checked){
                $("#btn-destroy").removeClass("hidden");
            }else{
                $("#btn-destroy").addClass("hidden");
            }
            $('td input:checkbox',table).prop('checked',this.checked);
        });
        $('.checbox').click(function(e){
            if($('.checbox:checked').length == 0){
                $("#btn-destroy").addClass("hidden");
            }else{
                $("#btn-destroy").removeClass("hidden");
            }
        });
        $('#btn-destroy').click(function(e){
            let is_checked = $('.checbox:checked').length;
            if(is_checked > 0){
                let arrId = []
                $('.checbox:checked').each(function (i){
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
                    if (result.isConfirmed){
                        $.ajax({
                            url: "{{ route('role.destroy') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": arrId
                            },
                            success: function (response) {
                                if(response.status){
                                    Swal.fire("Done!", "It was succesfully deleted!", "success").then(function(){
                                        location.reload();
                                    });
                                }else{
                                    Swal.fire("Error deleting!", "Please try again", "error").then(function(){
                                        location.reload();
                                    });
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                Swal.fire("Error deleting!", "Please try again", "error").then(function(){
                                    location.reload();
                                });
                        }
                        });
                    }
                });
            }
        });
        $('#table tbody').on('click', '.show', function () {
            var id = $(this).data('id');
            var url = $(this).data('url');
            $.ajax({
                url: url,
                type: 'GET',
            })
            .done(function (response) {
                if(response.status){
                    console.log(response.data.image_url);
                    $('#id_show').text(response.data.id);
                    $('#name_show').text(response.data.name);
                    $('#slug_show').text(response.data.slug);
                    $('#log_show').text(response.data.created_at);
                    $('#modal-show').modal('show');

                }
            })
            .fail(function () {
                console.log("error");
            });
        });
    });
</script>
@endpush
