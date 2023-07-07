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
                <form class="login100-form" method="POST" action="{{ url('register') }}">
                    @csrf
                    <span class="login100-form-title">
                        Daftar Akun
                    </span>


                    <div class="wrap-input100">
                        <input class="input100" type="text" value="{{ old('name') }}" name="name"
                            placeholder="Masukan Nama">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="email" value="{{ old('email') }}" name="email"
                            placeholder="Masukan email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="number" value="{{ old('whatsapp') }}" name="whatsapp"
                            placeholder="Whatsapp">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </span>
                        @if ($errors->has('whatsapp'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('whatsapp') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100" for="password-confirm">
                        <input class="input100" type="password" id="password-confirm" name="password_confirmation"
                            placeholder="Konfirmasi Password" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Daftar
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Lupa
                        </span>
                        <a class="txt2" href="#">
                            Password?
                        </a>
                        <div class="text-center p-t-136">
                            <a class="txt2" href="/login">
                                Login Akun
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.scripts_login')

</body>

</html>
