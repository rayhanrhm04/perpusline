<div class="modal fade" id="modal-create" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Tag</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tag.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Tag</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan Tag" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                         <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-label">Status:</label>
                                    <select class="form-control  @error('status') is-invalid @enderror" name="status" aria-label="Default select example">
                                        <option value="">Pilih Status</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Tidak Aktif<option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    </div>
                 </div>
            <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
               </div>
            </div>
       </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>