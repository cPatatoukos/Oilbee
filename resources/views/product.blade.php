@extends('layout')

{{--  one blade to manage them (html products) all  --}}

@section('content')

<div class="container my-50"> 

    <a href="/{{ $product->category }}" class="flex w-min pr-5 justify-start items-center mb-30 {{ $product->category == 'honey' ? 'text-honey-darkest hover:text-honey-dark' : 'text-oil-darker hover:text-oil' }} text-h6">
        <span class="arrow left w-15 h-15 p-px mr-10"></span>
        <span>back</span>
    </a>


    <div class="md:flex justify-center mb-30">
        <span class="flex justify-center mb-20">
            <img src="{{ $product->image }}" class="w-200 h-200 md:w-300 md:h-300 rounded-lg">
        </span>

        <div class="md:ml-20 text-oil-darkest md:text-left ml-auto mr-auto md:mr-0 h-200">
            <h1 class="text-h2 w-min ml-auto mr-auto md:ml-0 font-medium whitespace-nowrap mt-30">{{ $product->name }} {{ $product->category }}</h1>
            <p class="italic text-between-dark ml-auto md:text-left md:ml-0 mr-auto max-w-300 mt-15">Produced & bottled by our family, always with care and respect for nature</p>
            {{--  {{ $price = $product->price; }}  --}}
            <div class="flex justify-center md:justify-start w-full">
                <select class="cursor-pointer mt-30 {{  $product->category == 'honey' ? 'honey-select' : 'oil-select' }}">
                    <option selected="selected">{{ $product->option1 }}</option>
                    <option >{{ $product->option2 }}</option>
                    <option>{{ $product->option3 }}</option>
                </select>    
            </div>
            <div class="w-full flex justify-center md:justify-start mt-20">
                <span class="mr-7">price:</span>
                @if ($product->discount != NULL)
                    <span class="line-through mr-7 italic text-small">{{ $product->price }}$</span>
                    <span>{{ round($product->price * (100 - $product->discount) / 100,2) }}$</span>
                @else
                    <span class="">{{ $product->price }}$</span>
                @endif
            </div>
            <div class="counter justify-center md:justify-start ml-auto md:ml-0 mr-auto my-10">
                <div class="count flex items-center rounded-lg justify-between text-honey-darkest hover:shadow-md">
                    <div class="button-bg px-10 rounded-md">
                        <img src="/svg/minus.svg" width="20" height="20">
                    </div>
                    <form class="bg-transparent">
                        <input type="number" class="w-full bg-transparent h-full"/>
                    </form>
                    <div class=" button-bg rounded-md px-10">
                        <img class="" src="/svg/plus.svg"  width="20" height="20">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="italics w-400 md:w-[600px] mx-auto mt-100 md:mt-0">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam itaque ullam soluta explicabo natus<span id="dots">...</span><span id="more"> at facilis, deleniti voluptatem rerum, aut porro nobis necessitatibus laudantium accusantium dolor officia consectetur voluptatum numquam nihil modi dolorem deserunt. Labore accusamus ipsum inventore. Est quia numquam pariatur, qui soluta aspernatur neque vel eaque, necessitatibus labore laboriosam fugit molestias quod doloremque quaerat distinctio amet illo.</span>
    </p> 
    <div class="w-full flex">
        <button onclick="more()" class="text-between-dark mx-auto italic" id="more-btn">Read more...</button>
    </div>
</div>

@endsection

<script>
    function more() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("more-btn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more...";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>