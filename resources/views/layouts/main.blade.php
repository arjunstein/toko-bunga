<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')
    @vite([])
</head>

<body>
    <div class="wrapper">

        @include('partials.header')

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">

            @include('partials.sidebar')

        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                                <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">

                @include('partials.footer')

            </footer>
        </div>

        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">

            @include('partials.custom')

        </div>
        <!-- End Custom template -->
    </div>

    @include('partials.scripts')

</body>

</html>
