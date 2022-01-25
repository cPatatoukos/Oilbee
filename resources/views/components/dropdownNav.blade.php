<nav class="bg-between-light h-[45px] hidden md:block">
    <div class="h-5"></div>
    <hr class="h-1 pt-[1px] bg-oil-darkest mt-0 w-2/3 mx-auto"/> 
    <div class="text-h6 w-full h-[35px]  justify-center text-oil-darkest flex">                            
        <div class="flex mr-15 mt-15 cursor-pointer hover:text-oil-darker" x-on:click="oil = !oil; 
            oil ? document.getElementById('oilArrow').classList.add('rotateEl') : 
            document.getElementById('oilArrow').classList.remove('rotateEl');"
            :class="oil ? 'text-oil-darker' : '' ">
            <div class="mr-10 -mt-9">Olive oil</div>
            <span id="oilArrow" class="arrow down transform w-3 h-3 flex-initial"></span>
        </div>
        <div class="flex ml-15 mt-15 cursor-pointer hover:text-honey-darker" x-on:click="honey = !honey; 
            honey ? document.getElementById('honeyArrow').classList.add('rotateEl') : 
            document.getElementById('honeyArrow').classList.remove('rotateEl');"
            :class="honey ? 'text-honey-darker' : '' ">
            <div class="mr-10 -mt-9">Honey</div>
            <span id="honeyArrow" class="arrow down w-3 h-3 flex-initial"></span>
        </div>
    </div>
</nav>
 <div class="dropdown-grid w-full relative z-0">
    <ul id="oil-menu" class="bg-white absolute z-0 hidden md:block shadow-xl mx-100 w-300 rounded-b-lg max-h-250" 
        x-show="oil" x-on:click.outside="oil=false
        oil ? document.getElementById('oilArrow').classList.add('rotateEl') : 
        document.getElementById('oilArrow').classList.remove('rotateEl');">
        @foreach ($nav  as $prod)
            @if ($prod->category == 'olive-oil')
            <li>
                <a href="/olive-oil/{{ $prod->name }}" class="text-oil-darker hover:text-oil h-80 flex items-center justify-between px-10">
                    <span calss="">{{ $prod->name }} olive oil</span>
                    <img src="{{ $prod->image }}" class="w-60 h-60 rounded-lg">
                </a>
            </li>
            @endif
        @endforeach 
    </ul>
    <ul id="honey-menu" class="bg-white shadow-xl absolute z-0 hidden md:block w-300 rounded-b-lg max-h-250 overflow-scroll" 
        x-show="honey" x-on:click.outside="honey=false
        honey ? document.getElementById('honeyArrow').classList.add('rotateEl') : 
        document.getElementById('honeyArrow').classList.remove('rotateEl');">
        @foreach ($nav as $prod)
            @if ($prod->category == 'honey')
                <li>
                    <a href="/honey/{{ $prod->name }}" class="text-honey-darker hover:text-honey h-80 flex items-center justify-between px-10">
                        <span>{{ $prod->name }} honey</span>
                        <img src="{{ $prod->image }}" class="w-60 h-60 rounded-lg">
                    </a>
                </li>
            @endif
        @endforeach 
    </ul>
</div> 