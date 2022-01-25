@extends('layout')

@section('content')

<div class="px-12">
    <div class="flex justify-between mt-50 w-full">
        <a href="/" class="flex justify-start items-start md:items-center mb-30 text-between-dark text-h6 hover:text-between">
            <span class="arrow left w-15 h-15 p-px mr-10"></span>
            <span class="-mt-5 md:mt-0">back to shopping</span>
        </a>
        <h1 class="text-center text-h2">Cart</h1>
        <div class="invisible w-[164px]">hey</div>
    </div>

    <div class="flex md:ml-50 lg:ml-100">
        <div>
            <x-cart.product/>
            <x-cart.product/>
            <x-cart.product/>
        </div>
    </div>
    <div class="lg:mr-100 xl:mr-300">
        <hr class="mr-2 md:ml-50 lg:ml-100 mt-4 bg-oil-darker py-[1px]">
        <h4 class="text-right text-h4 my-10 mr-30"> <span class="mr-10">Subtotal:</span>77.59$</h4>
        <div class="w-full ml-50 flex justify-center">
            <a href="/cart" class="bg-between hover:bg-between-dark w-300 flex justify-center py-3 px-10 rounded-lg mb-100 mx-20">
                <span class="text-white">
                    Checkout 
                </span>
            </a>
            <span class="text-h5 mt-[11px] ml-10 italic text-between-darker">OR</span>
            <a href="/cart" class="hover:text-between-darker ml-30 text-between flex justify-center pt-3 mb-100">
                <span class="">
                      Checkout as Guest
                </span>
            </a>
        </div>
    </div>
</div>
@endsection