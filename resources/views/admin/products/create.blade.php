@extends('layouts.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <div class="row g-7 justify-content-center">
                    <div class="col-xl-10">
                        <form action="{{ url('admin/products') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card card-flush py-4">
                                <div class="card-body pt-0">
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <div class="col">
                                            <div class="mb-10 fv-row mt-2">
                                                <label class="required form-label">Nama Produk</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="namaProduk"
                                                    class="form-control mb-2 @error('namaProduk') is-invalid @enderror"
                                                    placeholder="Nama Produk" />
                                                <!--end::Input-->
                                                @error('namaProduk')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row mt-2">
                                                <label class="required form-label">Slug</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="slug"
                                                    class="form-control mb-2 @error('slug') is-invalid @enderror"
                                                    placeholder="Slug" disabled />
                                                <!--end::Input-->
                                                @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row mt-2">
                                                <label class="required form-label">Harga Produk</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="number" name="harga"
                                                    class="form-control mb-2 @error('harga') is-invalid @enderror"
                                                    placeholder="Harga Produk" />
                                                <!--end::Input-->
                                                @error('harga')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-10 fv-row mt-2">
                                                <label class="required form-label">Kategori Produk</label>
                                                <select
                                                    class="form-select form-select-solid @error('categoryId') is-invalid @enderror"
                                                    name="categoryId" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a layout">
                                                    <option disabled selected="selected">Pilih Kategori</option>
                                                </select>
                                                @error('categoryId')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row mt-2">
                                                <label class="required form-label">Gambar</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="gambar"
                                                    class="form-control mb-2 @error('gambar') is-invalid @enderror"
                                                    placeholder="gambar" />
                                                <!--end::Input-->
                                                @error('gambar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row mt-2">
                                                <label class="required form-label">Deskripsi Produk</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea name="deskripsi" id="deskripsi"
                                                    class="form-control form-control-solid mb-3 mb-lg-0 @error('deskripsi') is-invalid @enderror" rows="4"></textarea>
                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--begin::Button-->
                                    <a href="{{ url('admin/products') }}" class="btn btn-secondary me-5">Cancel</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Save Changes</span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
