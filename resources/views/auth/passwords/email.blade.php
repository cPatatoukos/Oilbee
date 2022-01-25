@extends('layout')

@section('content')
<div class="container flex items-center min-h-screen my-50 justify-center">
    <div class="border-2 border-oil-lighter rounded-lg text-oil-darkest">
        <div class="bg-oil-lighter rounded-t-sm py-3 h-50 text-h6 text-center">{{ __('Reset Password') }}</div>

        <div class="bg-white rounded-lg">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" class="rounded-lg pt-40 w-[600px] bg-white h-full" action="{{ route('password.email') }}">
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

                <div class="flex justify-center w-full pb-30 mt-30">
                    <button type="submit" class="button oil">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
