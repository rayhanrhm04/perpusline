<div class="modal fade" id="modal-create" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Buku</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('book.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="username" class="form-label">Nama Kategori</label>
                                    <select class="form-control" name="title" aria-label="Default select example">
                                        <option value="1">IT</option>
                                        <option value="2">Design<option>
                                    </select>
                                    @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Judul Buku</label>
                                    <input type="text" name="title" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="username" class="form-label">Status</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="1">Aktif</option>
                                        <option value="2">Tidak Aktif<option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            <div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Upload Buku</label>
                                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file" accept="file/*">
                                    @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Upload Cover</label>
                                    <input type="file" name="file" class="form-control @error('cover') is-invalid @enderror" id="cover" accept="file/*">
                                    @error('cover')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Author</label>
                                    <input type="text" name="author_id" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama Author" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="username" class="form-label">Tags</label>
                                    <select class="form-control select-label" name="tag" aria-label="Default select example">
                                        <option value="">Pilih Tags</option>
                                        <option value="1">Teknologi</option>
                                        <option value="2">Tidak Aktif<option>
                                </select>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">Deskripsi:</label>
                                <textarea class="form-control" name="desc" rows="5" id="desc"></textarea>
                                @error('desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>