<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>

    @include('partials.head')

    @vite([])
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">

            <!--begin::Aside-->
            @include('partials.aside')
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <!--begin::Header-->
                @include('partials.header')
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ $title }}
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    @yield('content')

                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                @include('partials.footer')
                <!--end::Footer-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--begin::Engage drawers-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    @include('partials.scripts')

</body>
<!--end::Body-->

</html>
