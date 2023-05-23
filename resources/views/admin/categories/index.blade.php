@extends('layouts.main')

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Category-->
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
                        <input type="text" data-kt-ecommerce-category-filter="search"
                            class="form-control form-control-solid w-250px ps-14" placeholder="Search Category" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Add customer-->
                    <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Add Category</a>
                    <!--end::Add customer-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="w-50px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <span class="form-check-input" data-kt-check="true"
                                        data-kt-check-target="#kt_ecommerce_category_table .form-check-input"
                                        value="1">#</span>
                                </div>
                            </th>
                            <th class="min-w-200px">Kategori</th>
                            <th class="min-w-150px pe-2">Dibuat</th>
                            <th class="min-w-150px pe-2">Diperbarui</th>
                            <th class="min-w-70px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                        @foreach ($category as $e => $ctg)
                            <!--begin::Table row-->
                            <tr>
                                <input type="hidden" class="delete_id" value="{{ $ctg->id }}">
                                <!--begin::Checkbox-->
                                <td>
                                    {{ $e + 1 }}
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Type=-->
                                <td>
                                    <!--begin::Title-->
                                    <a href="{{ url('admin/categories/' . $ctg->id . '/edit') }}"
                                        class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                                        data-kt-ecommerce-category-filter="category_name">{{ ucwords($ctg->categoryName) }}</a>
                                    <!--end::Title-->
                                </td>
                                <!--end::Type=-->
                                <!--begin::Category=-->
                                <td>{{ date('d F Y H:i:s', strtotime($ctg->created_at)) }}</td>
                                <td>{{ date('d F Y H:i:s', strtotime($ctg->updated_at)) }}</td>
                                <!--end::Category=-->
                                <!--begin::Action=-->
                                <td>
                                    <a href="{{ url('admin/categories/' . $ctg->id . '/edit') }}"
                                        class="btn btn-sm btn-success">Edit</a>
                                    <button class="btn btn-sm btn-delete btn-danger"
                                        data-url="{{ url('admin/categories/' . $ctg->id) }}">Hapus</button>
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
        <!--end::Category-->
    </div>
@endsection
