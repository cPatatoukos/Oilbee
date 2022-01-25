<div class="screen-cover z-999 justify-end" x-show="miniCart">
    <div class="rounded-lg flex bg-white items-center justify-center w-40 h-40 mt-20 cursor-pointer">
        <img class="transform rotate-45" src="/svg/plus-dark.svg"  width="20" height="20">
    </div>
    <div class="miniCart text-oil-darkest rounded-l-lg" x-on:click.outside="miniCart=false">
        <h3 class="text-h3 text-center mt-20">Cart</h3>
        <div class="flex flex-col justify-between h-screen">
            <div class="h-2/3 overflow-scroll">
                <x-miniproduct/>
                <x-miniproduct/>
                <x-miniproduct/>
            </div>
            <hr class="mr-2 ml-50 lg:ml-100 mt-4 bg-between py-[1px]">
            <h3 class="text-right text-h6 mr-30"> <span class="text-h4 mr-10">Subtotal:</span>77.59$</h3>
            <a href="/cart" class="bg-between hover:bg-between-dark flex justify-center py-2 px-10 rounded-lg mb-100 mx-20">
                <span class="text-white">
                    Checkout
                </span>
            </a>
        </div>
    </div>
</div>