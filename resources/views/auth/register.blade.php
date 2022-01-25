@extends('layout')

@section('content')
<div class="container flex items-center min-h-screen my-50 justify-center">
    <div class="border-2 border-oil-lighter rounded-lg text-oil-darkest">
        <div class="bg-oil-lighter rounded-t-sm py-3 h-50 text-h6 text-center">{{ __('Register') }}</div>

        <div class="bg-white rounded-lg">
            <form method="POST" class="rounded-lg pt-40 w-[600px] bg-white h-full" action="{{ route('register') }}">
                @csrf

                <div class="flex items-center justify-center mb-3">
                    <label for="email" class="label">{{ __('Name') }}</label>

                    <div class="col-md-6 w-300">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>

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

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-center mb-3">
                    
                    <label for="password-confirm" class="label w-200 ml-[-100px]">{{ __('Password confirm') }}</label>

                    <div class="col-md-6 w-300">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="flex justify-center w-full ">
                    <button type="submit" class="button oil mb-20">
                        {{ __('Register') }}
                    </button>
                </div>
                <div class="flex w-full justify-center pb-20">
                    <span class="mr-30 self-center">Already have an account?</span>
                    <a class="hover:underline hover:text-facebook text-base" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
