@extends('layouts.header-OnlyStyles')

@section('content')
    <div class="container">
        <div class="bubbles-green-beneath_card"></div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card card-coloured-green">
                    <div class="bubbles-green-above_card"></div>

                    <div class="card-body ">
                        <h5 class="login_colored_card_text ">Admin Panel {{ __('register') }}</h5>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card card-coloured">
                    <div class="card-body  ">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name" class=" col-form-label text-md-right">Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="Login_rounded_inputs form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="email" class="col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class=" Login_rounded_inputs form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password" class="col-form-label text-md-right">Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="Login_rounded_inputs form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="password-confirm" class="col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="Login_rounded_inputs form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
