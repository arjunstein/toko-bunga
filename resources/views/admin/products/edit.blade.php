@extends('layouts.main')

@section('content')
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Form Edit User</div>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/products/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-5 col-lg-6">
                            <div class="form-group">
                                <label for="email2">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="namaProduk"
                                    class="form-control @error('namaProduk') is-invalid @enderror" id="email2"
                                    placeholder="Masukan Nama" value="{{ $product->namaProduk }}">
                                @error('namaProduk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email2">Category <span class="text-warning">*</span></label>
                                <select type="text" name="categoryId"
                                    class="form-control @error('categoryId') is-invalid @enderror" id="email2">
                                    <option value="" disabled>--Pilih Category--</option>
                                    @foreach ($category as $ctg)
                                        <option value="{{ $ctg->id }}"
                                            {{ $product->categoryId == $ctg->id ? 'selected' : '' }}>
                                            {{ $ctg->categoryName }}</option>
                                    @endforeach
                                </select>
                                @error('categoryId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email2">Slug <small class="text-danger"><i>read only</i></small></label>
                                <input type="text" name="slug"
                                    class="form-control @error('slug') is-invalid @enderror" id="email2"
                                    placeholder="Masukan slug" value="{{ $product->slug }}" disabled>
                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-6">
                            <div class="form-group">
                                <label for="email2">Harga <span class="text-danger">*</span></label>
                                <input type="number" name="harga"
                                    class="form-control @error('harga') is-invalid @enderror" id="email2"
                                    placeholder="Masukan harga" value="{{ $product->harga }}">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email2">Gambar <span class="text-danger">* <small>Max:
                                            1024 kb</small></span></label>
                                <input type="file" name="gambar"
                                    class="form-control @error('gambar') is-invalid @enderror" id="email2"
                                    placeholder="Masukan Nama" value="{{ $product->gambar }}">
                                @error('gambar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="comment">Deskripsi <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="comment" rows="3">{{ $product->deskripsi }}</textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-action" style="text-align: right;">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="/admin/products" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
