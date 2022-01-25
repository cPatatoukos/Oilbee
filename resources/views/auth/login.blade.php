@extends('layout')

@section('content')
<div class="container flex items-center h-screen my-50 justify-center">
    <div class="border-2 border-oil-lighter rounded-lg text-oil-darkest">
        <div class="bg-oil-lighter rounded-t-sm py-3 h-50 text-h6 text-center">{{ __('Login') }}</div>

        <div class="bg-white rounded-lg h-[270px]">
            <form method="POST" class="rounded-lg pt-40 w-[600px] bg-white h-full" action="{{ route('login') }}">
                @csrf

                <div class="flex items-center justify-center mb-3">
                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6 w-300">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-center mb-3 items-center">
                    <label for="password" class="label">{{ __('Password') }}</label>

                    <div class="col-md-6 ">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-center items-center w-300 ml-200 mb-50">
                    <div class="col-md-6 mr-80">
                        <div class="form-check ml-10">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="button oil">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    @if (Route::has('password.request'))
                        <a class="hover:underline hover:text-facebook self-center mr-50" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <a class="hover:underline hover:text-facebook text-base" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
