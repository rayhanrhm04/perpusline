<div class="modal fade" id="modal-edit" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" id="form-edit" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Kategori:</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title_edit" placeholder="Masukan Kategori" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-label">Status:</label>
                                    <select class="form-control  @error('status') is-invalid @enderror" name="status" id="status_edit" aria-label="Default select example">
                                        <option value="">Pilih Status</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Tidak Aktif<option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comment">Deskripsi:</label>
                                    <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc_edit" rows="5" id="desc"></textarea>
                                    @error('desc')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>