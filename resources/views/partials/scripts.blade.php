<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>

{{-- user management --}}
<script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>

{{-- produk --}}
<script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/products.js') }}"></script>

{{-- category produk --}}
<script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
<script src="{{ mix('js/app.js') }}"></script>
<script>
    var flash = "{{ Session::has('sukses') }}";
    if (flash) {
        var pesan = "{{ Session::get('sukses') }}"
        swal.fire("Sukses", pesan, "success");
    }

    var gagal = "{{ Session::has('gagal') }}";
    if (gagal) {
        var pesan = "{{ Session::get('gagal') }}"
        swal.fire("Error", pesan, "error");
    }
    var info = "{{ Session::has('info') }}";
    if (info) {
        var pesan = "{{ Session::get('info') }}"
        swal.fire("Info", pesan, "info");
    }
    var info = "{{ Session::has('warning') }}";
    if (info) {
        var pesan = "{{ Session::get('warning') }}"
        swal.fire("Warning", pesan, "warning");
    }
    var info = "{{ Session::has('question') }}";
    if (info) {
        var pesan = "{{ Session::get('question') }}"
        swal.fire("Question", pesan, "question");
    }

    // Hapus kategori
    $(document).ready(function() {
        $('.btn-delete').click(function(e) {
            e.preventDefault();
            var deleteUrl = $(this).attr('data-url');

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Anda yakin ingin menghapus kategori ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: 'red',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Hapus" diklik
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Sukses',
                                text: 'Kategori berhasil dihapus.',
                                icon: 'success'
                            }).then((result) => {
                                // Tindakan setelah penghapusan berhasil
                                if (result.isConfirmed) {
                                    // Lakukan pengalihan halaman
                                    window.location.href =
                                        "{{ url('admin/categories') }}"; // Ganti dengan URL tujuan setelah penghapusan berhasil
                                }
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data.',
                                icon: 'error'
                            });
                        }
                    });
                }
            });
        });
    });

    // Hapus produk
    $(document).ready(function() {
        $('.btn-delete-product').click(function(e) {
            e.preventDefault();
            var deleteUrl = $(this).attr('data-url');

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Anda yakin ingin menghapus produk ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: 'red',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Hapus" diklik
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Sukses',
                                text: 'Produk berhasil dihapus.',
                                icon: 'success'
                            }).then((result) => {
                                // Tindakan setelah penghapusan berhasil
                                if (result.isConfirmed) {
                                    // Lakukan pengalihan halaman
                                    window.location.href =
                                        "{{ url('admin/products') }}"; // Ganti dengan URL tujuan setelah penghapusan berhasil
                                }
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data.',
                                icon: 'error'
                            });
                        }
                    });
                }
            });
        });
    });
    // Hapus user
    $(document).ready(function() {
        $('.btn-delete-user').click(function(e) {
            e.preventDefault();
            var deleteUrl = $(this).attr('data-url');

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Anda yakin ingin menghapus user ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: 'red',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Hapus" diklik
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Sukses',
                                text: 'User berhasil dihapus.',
                                icon: 'success'
                            }).then((result) => {
                                // Tindakan setelah penghapusan berhasil
                                if (result.isConfirmed) {
                                    // Lakukan pengalihan halaman
                                    window.location.href =
                                        "{{ url('admin/users') }}"; // Ganti dengan URL tujuan setelah penghapusan berhasil
                                }
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data user.',
                                icon: 'error'
                            });
                        }
                    });
                }
            });
        });
    });

    //logout konfirmasi
    $(document).ready(function() {
        $('.btn-logout').click(function(e) {
            e.preventDefault();
            var logoutUrl = $(this).attr('data-url');

            Swal.fire({
                title: 'Konfirmasi Logout',
                text: 'Anda yakin ingin logout?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: 'red',
                confirmButtonText: 'Ya, Logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Hapus" diklik
                    $.ajax({
                        url: logoutUrl,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Sukses',
                                text: 'Berhasil Logout',
                                icon: 'success'
                            }).then((result) => {
                                // Tindakan setelah penghapusan berhasil
                                if (result.isConfirmed) {
                                    // Lakukan pengalihan halaman
                                    window.location.href =
                                        "{{ url('login') }}"; // Ganti dengan URL tujuan setelah penghapusan berhasil
                                }
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Gagal logout',
                                icon: 'error'
                            });
                        }
                    });
                }
            });
        });
    });
</script>
