@extends('backend.layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('backend/login/images/bg-01.jpg') }}');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    {{ __('Register') }}
                </span>
                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-b-33 p-t-5">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-fail">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Enter name">
                        <input id="name" class="input100 @error('name') is-invalid @enderror" type="text" name="name"
                            autocomplete="name" autofocus placeholder="Enter name" value="{{ old('name') }}">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input id="email" class="input100 @error('email') is-invalid @enderror" type="text" name="email"
                            placeholder="Enter email" autocomplete="email" value="{{ old('email') }}">
                        <span class="focus-input100 " data-placeholder="&#xe83c;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input id="password" class="input100 @error('password') is-invalid @enderror" type="password"
                            name="password" placeholder="Password" autocomplete="new-password" value="{{ old('password') }}">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input id="password-confirm" class="input100 @error('password') is-invalid @enderror"
                            type="password" name="password_confirmation" placeholder="Confirm password"
                            autocomplete="new-password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
                        </button>

                    </div>
                    <a class="container-login100-form-btn m-t-32 text-danger" href="{{ route('login') }}">I already
                        have an account. Sign in</a>
                </form>
            </div>
        </div>
    </div>


@endsection
{{-- ```````````````````````````````````````````````````````````````````````````` --}}
