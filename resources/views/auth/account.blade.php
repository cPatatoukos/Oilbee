@extends('layout')

@section('content')

    <div class="container min-h-screen">
        <div class="my-50 flex justify-evenly">
            <div >{{ __('Personal data') }}</div>
            <div >{{ __('My addresses') }}</div>
            <div >{{ __('Order history') }}</div>
            <div >{{ __('Track order') }}</div>
        </div>
    </div>

@endsection
