@extends('layouts.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-ecommerce-product-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Add product-->
                        <a href="{{ url('admin/products/create') }}" class="btn btn-primary">Add Product</a>
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 text-dark">
                                    No.
                                </th>
                                <th class="min-w-20px text-dark">Gambar</th>
                                <th class="min-w-100px text-dark">Nama Produk</th>
                                <th class="min-w-100px text-dark">Kategori</th>
                                <th class="min-w-80px text-dark">Slug</th>
                                <th class="min-w-100px text-dark">Harga</th>
                                <th class="min-w-100px text-dark">Deskripsi</th>
                                <th class="min-w-70px text-dark">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <tbody class="fw-bold text-gray-600">

                            @foreach ($products as $e => $product)
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <span class="fw-bolder text-dark">{{ $e + 1 }}</span>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Category=-->
                                    <td>
                                        <img src="{{ $product->gambar }}" alt="" width="55px">
                                    </td>
                                    <!--end::Category=-->
                                    <!--begin::SKU=-->
                                    <td>
                                        <span class="fw-bolder text-dark">{{ $product->namaProduk }}</span>
                                    </td>
                                    <!--end::SKU=-->
                                    <!--begin::Qty=-->
                                    <td>
                                        <span
                                            class="fw-bolder text-dark">{{ ucwords($product->category->categoryName) }}</span>
                                    </td>
                                    <!--end::Qty=-->
                                    <!--begin::Price=-->
                                    <td>
                                        <span class="fw-bolder text-dark">{{ Str::limit($product->slug, 3, '...') }}</span>
                                    </td>
                                    <!--end::Price=-->
                                    <!--begin::Rating-->
                                    <td>
                                        <span class="fw-bolder text-dark">Rp. {{ number_format($product->harga) }}</span>
                                    </td>
                                    <!--end::Rating-->
                                    <!--begin::Status=-->
                                    <td>
                                        <span
                                            class="fw-bolder text-dark">{{ Str::limit($product->deskripsi, 5, '...') }}</span>
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Action=-->
                                    <td>
                                        <a href="{{ url('admin/products/' . $product->id . '/edit') }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <button class="btn btn-sm btn-delete-user btn-danger"
                                            data-url="{{ url('admin/products/' . $product->id) }}">Hapus</button>
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                            @endforeach

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
@endsection
