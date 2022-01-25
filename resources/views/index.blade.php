@extends('layout')

@section('content')

    <div class="container h-[700px] md:h-[500px] my-50">         
        <div class="flex justify-center mb-50">
            <h1 class="text-h2 text-oil-darkest text-center">Our natural products, <br class="md:hidden"/> one click away!</h1>
        </div>
        <div class="flex justify-center w-full">
            <div class="md:flex justify-center">
                <div class="mb-60 md:mr-20">
                    <a href="olive-oil" class="mx-auto flex justify-center mb-20">
                        <img src="/images/oil.jpeg" class="w-200 h-200 md:w-300 md:h-300 rounded-lg">
                    </a>
                    <a href="olive-oil" class="text-h6 hover:text-oil-darker text-oil-darkest italic font-bold mx-auto md:w-250px text-center">Have you tried our extra virgin olive oil yet?</a>
                </div>
                <div class="md:ml-20">
                    <a href="honey" class="mx-auto flex justify-center mb-20">
                        <img src="/images/honey.jpeg" class="w-200 h-200 md:w-300 md:h-300 rounded-lg">
                    </a>
                    <a id="contact" href="honey" class="text-h6 hover:text-honey text-honey-darker italic font-bold mx-auto w-200 md:max-w-250px text-center">Have you tried our top quality honey yet?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- contact page -->
    <div class="bg-oil-lighter mx-30 mb-100 flex items-center justify-center rounded-lg text-oil-darkest">
        <div>
            <h2 class="text-center my-30 text-h2">Contact us</h2>
            <form class="w-300 md:w-500">
                <div class="w-full">
                    <label>Full name <span class="text-red">*</span></label>
                    <br>
                    <input type="text" class="w-full mb-10 h-30 pl-5 rounded-md" required>
                </div>
                <!-- Email -->
                <div>
                    <label>Email<span class="text-red">*</span></label>
                    <br>
                    <input type="email" class="w-full mb-10 h-30 pl-5 rounded-md" required>
                </div>
                <!-- Telephone -->
                <div>
                    <label>Phone Number</label>
                    <br>
                    <input type="tel" class="w-full mb-10 h-30 pl-5 rounded-md">
                </div>
                <!-- Message -->
                <div>
                    <label>Message<span class="text-red">*</span></label>
                    <br>
                    <textarea class="h-70 b-10 w-full pl-5 rounded-md" required></textarea>
                </div>
                <!-- Submit -->
                <div class="flex w-full justify-center my-30">
                    <input type="submit" class="px-20 py-[10px] bg-between rounded-lg hover:bg-between-light" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>

    {{--  Our Products  --}}
    <h2 class="text-h2 mb-30 text-center">Our products</h2>
    <p class="px-50 md:px-80 lg:px-100 xl:px-200 mb-100">
        Our products are 100% natural, produced with love or accepted by our family with the highest of criteria.
        Our goal is to make the best of what nature gives us, keeping the qulaity of our products as high as nature gives it o us.
        And we do actually mean it!

     </p>
    {{--  End Our Products  --}}



@endsection('index')
