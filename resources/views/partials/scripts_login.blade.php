<!--===============================================================================================-->
<script src="{{ asset('../../assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('../../assets/login/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('../../assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('../../assets/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('../../assets/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
{{-- sweet alert --}}
<script src="{{ asset('../../../assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })

    // alert failed
    @if (Session::has('error'))
        swal("Error", "{{ Session::get('error') }}", {
            icon: "error",
            buttons: {
                confirm: {
                    className: 'btn btn-danger'
                }
            },
        });
    @endif
</script>
<!--===============================================================================================-->
<script src="{{ asset('../../assets/login/js/main.js') }}"></script>
