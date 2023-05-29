@extends('layouts.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Post card-->
            <div class="card card-flush">
                <!--begin::Body-->
                <div class="card-body p-lg-20 pb-lg-0">
                    <!--begin::Section-->
                    <div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Title-->
                            <h3 class="text-dark">Daftar Produk</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <a href="#" class="fs-6 fw-bold link-primary">View All Offers</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            @foreach ($products as $prod)
                                <div class="col-md-3">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch ms-md-6">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{ $prod->gambar }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url({{ $prod->gambar }})">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                        <!--begin::Body-->
                                        <div class="mt-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $prod->namaProduk }}</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">
                                                {{ $prod->category->categoryName }}
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                            <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                                <!--begin::Label-->
                                                <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                                    <span class="fs-6 fw-bold text-gray-400"></span>Rp.
                                                    {{ number_format($prod->harga) }}</span>
                                                <!--end::Label-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-sm btn-primary">Buy</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                            @endforeach

                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Post card-->
        </div>
        <!--end::Container-->
    </div>
@endsection
