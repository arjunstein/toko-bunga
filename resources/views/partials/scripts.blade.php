<!--   Core JS Files   -->
<script src="{{ asset('../../../assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('../../../assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('../../../assets/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('../../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('../../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('../../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


<!-- Chart JS -->
<script src="{{ asset('../../../assets/js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('../../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('../../../assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('../../../assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('../../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('../../../assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('../../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('../../../assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Atlantis JS -->
<script src="{{ asset('../../../assets/js/atlantis.min.js') }}"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{ asset('../../../assets/js/setting-demo.js') }}"></script>
<script src="{{ asset('../../../assets/js/demo.js') }}"></script>
<script>
    Circles.create({
        id: 'circles-1',
        radius: 45,
        value: 60,
        maxValue: 100,
        width: 7,
        text: 5,
        colors: ['#f1f1f1', '#FF9E27'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-2',
        radius: 45,
        value: 70,
        maxValue: 100,
        width: 7,
        text: 36,
        colors: ['#f1f1f1', '#2BB930'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    Circles.create({
        id: 'circles-3',
        radius: 45,
        value: 40,
        maxValue: 100,
        width: 7,
        text: 12,
        colors: ['#f1f1f1', '#F25961'],
        duration: 400,
        wrpClass: 'circles-wrp',
        textClass: 'circles-text',
        styleWrapper: true,
        styleText: true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
            datasets: [{
                label: "Total Income",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false //this will remove only the label
                    },
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
</script>
<script src="{{ mix('js/app.js') }}"></script>
<script>
    // Datatable user
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});
    });

    //logout konfirmasi
    $('#btn-logout').click(function(e) {
        e.preventDefault();
        var logoutUrl = $(this).data('url');

        swal({
            title: 'Konfirmasi Logout',
            text: 'Anda yakin ingin logout?',
            icon: 'info',
            buttons: {
                confirm: {
                    text: 'Ya, logout!',
                    className: 'btn btn-danger'
                },
                cancel: {
                    visible: true,
                    className: 'btn btn-secondary'
                }
            }
        }).then((logout) => {
            if (logout) {
                $.ajax({
                    url: logoutUrl,
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        swal({
                            title: 'Logout Berhasil',
                            text: 'Anda telah berhasil logout',
                            type: 'success',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        }).then((result) => {
                            // Tindakan setelah logout berhasil
                            if (result) {
                                // Lakukan pengalihan halaman
                                window.location.href =
                                    "{{ url('login') }}"; // Ganti dengan URL tujuan setelah logout berhasil
                            }
                        });
                    },
                    error: function(xhr) {
                        swal({
                            title: 'Logout Gagal',
                            text: 'Terjadi kesalahan saat melakukan logout',
                            type: 'error',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-danger'
                                }
                            }
                        });
                    }
                });
            } else {
                swal.close();
            }
        });
    });

    // Hapus user
    $('.btn-delete').click(function(e) {
        e.preventDefault();
        var deleteUrl = $(this).data('url');
        var itemId = $(this).data('id');

        swal({
            title: 'Konfirmasi Hapus',
            text: 'Hapus user ini?',
            icon: 'warning',
            buttons: {
                confirm: {
                    text: 'Ya, hapus!',
                    className: 'btn btn-danger'
                },
                cancel: {
                    visible: true,
                    className: 'btn btn-secondary'
                }
            }
        }).then((hapus) => {
            if (hapus) {
                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": itemId
                    },
                    success: function(response) {
                        swal({
                            title: 'Sukses',
                            text: 'User berhasil dihapus',
                            icon: 'success',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        }).then((result) => {
                            // Tindakan setelah penghapusan berhasil
                            if (result) {
                                // Lakukan pengalihan halaman atau tindakan lainnya
                                window.location.href =
                                    "{{ url('admin/users') }}";
                            }
                        });
                    },
                    error: function(xhr) {
                        swal({
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat menghapus data',
                            icon: 'error',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-danger'
                                }
                            }
                        });
                    }
                });
            } else {
                swal.close();
            }
        });
    });

    // Hapus category
    $('.btn-delete-category').click(function(e) {
        e.preventDefault();
        var deleteUrl = $(this).data('url');
        var categoryId = $(this).data('id');

        swal({
            title: 'Konfirmasi Hapus',
            text: 'Hapus category ini?',
            icon: 'warning',
            buttons: {
                confirm: {
                    text: 'Ya, hapus!',
                    className: 'btn btn-danger'
                },
                cancel: {
                    visible: true,
                    className: 'btn btn-secondary'
                }
            }
        }).then((hapus) => {
            if (hapus) {
                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": categoryId
                    },
                    success: function(response) {
                        swal({
                            title: 'Sukses',
                            text: 'Category berhasil dihapus',
                            icon: 'success',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        }).then((result) => {
                            // Tindakan setelah penghapusan berhasil
                            if (result) {
                                // Lakukan pengalihan halaman atau tindakan lainnya
                                window.location.href =
                                    "{{ url('admin/categories') }}";
                            }
                        });
                    },
                    error: function(xhr) {
                        swal({
                            title: 'Gagal',
                            text: 'Tidak dapat dihapus langsung, karena memiliki product',
                            icon: 'error',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-danger'
                                }
                            }
                        });
                    }
                });
            } else {
                swal.close();
            }
        });
    });

    // Hapus product
    $('.btn-delete-product').click(function(e) {
        e.preventDefault();
        var deleteUrl = $(this).data('url');
        var id = $(this).data('id');

        swal({
            title: 'Konfirmasi Hapus',
            text: 'Hapus product ini?',
            icon: 'warning',
            buttons: {
                confirm: {
                    text: 'Ya, hapus!',
                    className: 'btn btn-danger'
                },
                cancel: {
                    visible: true,
                    className: 'btn btn-secondary'
                }
            }
        }).then((hapus) => {
            if (hapus) {
                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    success: function(response) {
                        swal({
                            title: 'Sukses',
                            text: 'Product berhasil dihapus',
                            icon: 'success',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        }).then((result) => {
                            // Tindakan setelah penghapusan berhasil
                            if (result) {
                                // Lakukan pengalihan halaman atau tindakan lainnya
                                window.location.href =
                                    "{{ url('admin/products') }}";
                            }
                        });
                    },
                    error: function(xhr) {
                        swal({
                            title: 'Gagal',
                            text: 'Tidak dapat dihapus langsung, karena memiliki product',
                            icon: 'error',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-danger'
                                }
                            }
                        });
                    }
                });
            } else {
                swal.close();
            }
        });
    });

    // alert success
    @if (Session::has('success'))
        swal("Sukses", "{{ Session::get('success') }}", {
            icon: "success",
            buttons: {
                confirm: {
                    className: 'btn btn-success'
                }
            },
        });
    @endif
</script>
