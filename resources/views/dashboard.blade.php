<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shopping') }}
        </h2>
    </x-slot>

    <section class="section trick" id="trick">

        <div class="trick_container container grid">
            <div class="trick_content">
                <img src="assets/img/trick-treat1-img.png" alt="" class="trick_img">
                <h3 class="trick_title">Toffee</h3>
                <span class="trick_subtitle">Sweet and sour candy</span>
                <span class="trick_price">Ksh. 200</span>

                <button class="button trick_button">
                    <i class='bx bx-cart-alt trick_icon'></i>
                </button>
            </div>

            <div class="trick_content">
                <img src="assets/img/trick-treat2-img.png" alt="" class="trick_img">
                <h3 class="trick_title">Bone</h3>
                <span class="trick_subtitle">Accessory</span>
                <span class="trick_price">Ksh. 345</span>

                <button class="button trick_button">
                    <i class='bx bx-cart-alt trick_icon'></i>
                </button>
            </div>

            <div class="trick_content">
                <img src="assets/img/trick-treat3-img.png" alt="" class="trick_img">
                <h3 class="trick_title">Scarecrow</h3>
                <span class="trick_subtitle">Accessory</span>
                <span class="trick_price">Ksh. 475</span>

                <button class="button trick_button">
                    <i class='bx bx-cart-alt trick_icon'></i>
                </button>
            </div>

            <div class="trick_content">
                <img src="assets/img/trick-treat4-img.png" alt="" class="trick_img">
                <h3 class="trick_title">Candy cane</h3>
                <span class="trick_subtitle">Tasty treats and lollipops</span>
                <span class="trick_price">Ksh. 100</span>

                <button class="button trick_button">
                    <i class='bx bx-cart-alt trick_icon'></i>
                </button>
            </div>

            <div class="trick_content">
                <img src="assets/img/trick-treat5-img.png" alt="" class="trick_img">
                <h3 class="trick_title">Pumpkin</h3>
                <span class="trick_subtitle">Decoration</span>
                <span class="trick_price">Ksh. 1200</span>

                <button class="button trick_button">
                    <i class='bx bx-cart-alt trick_icon'></i>
                </button>
            </div>

            <div class="trick_content">
                <img src="assets/img/trick-treat6-img.png" alt="" class="trick_img">
                <h3 class="trick_title">Ghost</h3>
                <span class="trick_subtitle">Accessory</span>
                <span class="trick_price">Ksh. 1700</span>

                <button class="button trick_button">
                    <i class='bx bx-cart-alt trick_icon'></i>
                </button>
            </div>
        </div>
    </section>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <div class="row products_container col-md-3">
                                <div class="img_container">
                                    <img src="assets/img/trick-treat1-img.png" alt="" class="trick_img">
                                </div>
                                <div class="desc_container">
                                    <h3 class="trick_title">Toffee</h3>
                                    <span class="trick_subtitle">Sweet and sour candy</span>
                                    <span class="trick_price">Ksh. 200</span>
                                </div>
                                <div class="button cart_button">
                                    <button class="button trick_button">
                                        <i class='bx bx-cart-alt trick_icon'></i>
                                    </button>
                                </div>
                            </div>

                            <div class="row col-md-3">
                                <img src="assets/img/trick-treat1-img.png" alt="" class="trick_img">
                            </div>
                            <div class="row col-md-3">
                                <img src="assets/img/trick-treat1-img.png" alt="" class="trick_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
