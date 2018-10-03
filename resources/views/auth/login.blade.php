@extends('layouts.header-OnlyStyles')

@section('content')
    <div class="container">
        <div class="bubbles-green-beneath_card"></div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card card-coloured-green">
                    <div class="bubbles-green-above_card"></div>

                    <div class="card-body ">
                        <h5 class="login_colored_card_text ">Admin Panel {{ __('Login') }}</h5>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card card-coloured">
                    <div class="card-body card_colored_content ">
                        <h2 class="Colored_content_Title">Welcome</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email"
                                       class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                           class="Login_rounded_inputs form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                           class=" Login_rounded_inputs form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-login">
                                        {{ __('Login') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
