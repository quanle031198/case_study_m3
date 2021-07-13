@extends('backend.layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('backend/login/images/bg-01.jpg') }}');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account {{ __('Login') }}
                </span>
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
                    
                    

                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input class="input100" id="email" type="text" name="email" placeholder="Enter email" value="{{ old('email') }}">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        @error('email')
                        <div class="alert alert-fail text-danger">
                            {{ $message }}
                        </div>
                         @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" type="password" id="password" name="password"
                            placeholder="Password" value="{{ old('password') }}">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        @error('password')
                        <div class="alert alert-fail text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>

                    </div>
                    <a class="container-login100-form-btn m-t-32 text-danger" href="{{ route('register') }}">Sign up</a>
                    {{-- @if (Route::has('password.request'))
                        <a class="container-login100-form-btn m-t-32 text-danger" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                </form>
            </div>
        </div>
    </div>

@endsection