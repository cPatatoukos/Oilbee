<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <title>Oilbee</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="min-h-screen" x-data="{ honey:false, oil:false, mobile:false, miniCart:false }">
        <div class="body-bg relative z-10 min-h-screen sm:items-center py-0 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-[130px] right-0 px-6 py-4">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif                 

            <x-miniCart />
            @php
            $user = auth()->user();
            @endphp

            <!-- header -->     
            <div id="header" class="sticky bg-between-light">
                <div class="flex h-60 items-center justify-around z-20 mx-16 relative">
                    <input type="checkbox" id="menu-toggle" class="hidden"/>
                    <label class="menu-toggle md:hidden" for="menu-toggle" x-on:click="mobile =!mobile">
                        <div class="bar"></div> 
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </label>
                    <a href="/" class="bg-oil-darkest text-h1 text-white rounded-lg w-200 h-40 flex items-center justify-center">Oilbee</a>
                    <div class="hidden focus-in md:flex max-w-500 rounded-lg min-w-250 mx-40 min-h-[49px] h-50 relative items-center flex-1">
                        <img class="w-24 h-24 absolute ml-16 text-between-lighter" src="{{ asset('svg/search.svg') }}"/>
                        <form class="min-h-[49px] w-full text-oil-darkest">
                            <input class="bg-transparent w-full outline-none focus:ring-0 text-base focus:text-oil-lightest h-full mt-14 pl-50" placeholder="Search here" />
                        </form>
                    </div>
                    <div class="flex">
                            @if (Route::has('login'))
                                <a href="/account" class="hidden md:flex mr-8 h-50 bg-transparent rounded-lg items-center justify-center text-oil-darkest hover:text-oil-darker">  
                                    <span>{{ $user->name ?? 'user' }}</span>
                                    <img class="w-24 h-24 ml-5 hidden md:block" src="{{ asset('svg/user.svg') }}"/>
                                </a>
                            @else 
                                <a href="/login" class="hidden md:flex px-16 mr-16 h-50 bg-transparent rounded-lg items-center justify-center text-oil-darkest hover:text-oil-darker">
                                    <span class="hidden lg:inline whitespace-nowrap">Register / Login</span>
                                    <img class="w-24 h-24 ml-5 hidden md:block" src="{{ asset('svg/user.svg') }}"/>
                                </a>
                            @endif
                        <span class="md:px-16 md:mr-16 cursor-pointer h-50 flex items-center justify-center text-oil-darkest hover:text-oil-darker" x-on:click="miniCart = true">
                            <span class="mr-16 hidden md:inline">Cart</span>
                            <span class="relative">
                                <span class="absolute -mt-10 z-10">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-24 h-24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </span>
                                <span class="absolute -mt-18 ml-6 tranform rotate-[25deg] z-0 bg-opacity-90 w-[15px] h-[15px] bg-white rounded-md flex items-center justify-center flex-none text-tiny text-oil-darker">
                                    3
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            
            <x-dropdownNav :nav="$nav ?? '' " />


            <div class="fixed md:hidden z-10 top-[55px] w-full h-full p-16 bg-white text-oil-darkest" x-show="mobile">
                <ul>
                    <li class="border-b-2 py-3 px-10 border-oil">
                        <a href="#">
                            Login/Register  
                        </a>
                    </li>
                    <li class="border-b-2 py-3 px-10 border-oil">
                        <a href="/olive-oil">
                            Our unique <strong class="font-bold text-oil-darker italic"> Olive-oil </strong> selection
                        </a>
                    </li>
                    <li class="border-b-2 py-3 px-10 border-oil">
                        <a href="/honey">
                            Our highest quality  <strong class="font-bold text-honey italic"> Honey </strong> selection
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end header -->

           @yield('content')

            <!-- footer -->
            <div id="footer" class="bg-between-light text-oil-darkest">
                <div class="md:flex container justify-evenly pt-20 w-full text-center">
                    <a href="#" class="hover:text-honey-darker mb-3 md:mr-20">About us</a>
                    <a href="/#contact" class="hover:text-honey-darker mb-3 md:mr-20">Contact us</a>
                    <a href="/" class="hover:text-honey-darker mb-3 md:mr-20">Our products</a>
                    <a href="#" class="hover:text-honey-darker mb-3 md:mr-20">Promotions</a>
                    <a href="#" class="hover:text-honey-darker mb-3 md:mr-20">FAQs</a>
                </div>
                <div class="flex justify-center pt-20">
                    <a href="#" class="text-small hover:text-facebook mr-20">
                        <span class="w-full full flex justify-center rounded-full">
                            <img class="w-30 h-30" src="{{ asset('svg/facebook.svg') }}"/>
                        </span>
                        <span class="hidden md:inline">Facebook</span>
                    <a href="#" class="text-small hover:text-instagram mx-20">
                        <span class="w-full full flex justify-center rounded-full">
                            <img class="w-30 h-30" src="{{ asset('svg/instagram.svg') }}"/>
                        </span>
                        <span class="hidden md:inline">Instagram</span>
                    </a>
                    <a href="#" class="text-small hover:text-youtube ml-20">
                        <span class="w-full full flex justify-center rounded-full">
                            <img class="w-30 h-30" src="{{ asset('svg/youtube.svg') }}"/>
                        </span>
                        <span class="hidden md:inline">Youtube</span>
                    </a>
                </div>
                <div class="flex justify-center w-full mt-30 mb-10">
                    <a href="#" class="text-h1 mx-auto text-oil-darker tracking-[5px]">Oilbee</a>
                </div>
                <div class="w-full flex justify-center">
                    <div class="text-oil-darkest mb-10 tracking-[1px] italic">Always natural , always top quality</div>
                </div>
            </div>
            <!-- end footer -->

            <div class="flex items-center justify-between h-30 px-20 md:px-30 w-full">
                <div class="  opacity-80 text-small"> <span class="hidden md:inline-block">Copyright &nbsp </span>© 2022</div>
                <a href="#" class="text-small italic text-oil-darkest">made with <span class="text-honey-darker font-bold mr-5 ml-5">Love</span> by Charalampos Patatoukos </a>
            </div>
        </div>
    </body>
</html>
