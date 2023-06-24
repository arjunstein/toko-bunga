<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.login_head')
</head>
@vite([])

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/login/images/img-01.png') }}" alt="IMG">
                </div>

                <form class="login100-form" method="POST" action="{{ route('login') }}">
                    <span class="login100-form-title">
                        Login Akun
                    </span>
                    <center>
                        <p>
                            @if ($errors->has('whatsapp'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('whatsapp') }}</strong>
                                </span>
                            @endif
                        </p>
                        <p>
                            @if ($errors->has('password'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </p>
                    </center>
                    @csrf
                    <div class="wrap-input100">
                        <input class="input100" type="number" value="{{ old('whatsapp') }}" name="whatsapp"
                            placeholder="Whatsapp">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="/register">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.scripts_login')

</body>

</html>
