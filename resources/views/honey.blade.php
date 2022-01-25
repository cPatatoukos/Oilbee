@extends('layout')

@section('content')
    <div class="container mt-50 mb-80 text-h6 text-oil-darkest"> 

        <div class="flex justify-between mb-50">
            <a href="/" class="flex justify-start items-start md:items-center mb-30 text-honey-darkest text-h6 hover:text-honey-dark">
                <span class="arrow left w-15 h-15 p-px mr-10"></span>
                <span class="-mt-5 md:mt-0">back</span>
            </a>
            <h1 class="text-h4 md:text-h2 text-center mt-60 md:mt-0">Our top quality honey!</h1>
            <span class="invisible w-60"></span>
        </div>

        <div class="flex justify-center w-full">
            <div class="md:flex justify-center">
                <div class="flex justify-center w-screen overflow-scroll">
                    <div class="md:flex justify-center overflow-x-scroll">  
                        @foreach ($category as $item)
                            <div class="mb-60 md:mr-20">
                                <a href="/honey/{{ $item->name }}" class="mx-auto flex justify-center mb-20">
                                    <img src="/images/honey.jpeg" class="w-200 h-200 lg:w-300 lg:h-300 rounded-lg">
                                </a>
                                <a href="/honey/honey" class="text-h6 text-oil-darkest italic font-bold mx-auto md:w-250px text-center">{{ $item->name }} {{ $item->category }}</a>
                                <div class="flex items-center">
                                    <span class="mr-10 italic text-base">from:</span>
                                    @if ($item->discount)
                                        <p class="line-through mr-15">{{ $item->price }}$</p>
                                        <span class="font-bold text-h6">{{round($item->price * (100 - $item->discount) / 100,2) }}$</span>
                                    @else
                                        <p class="mr-15 font-bold text-h6">{{ $item->price }}$</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection