<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spooky</title>

    <!-- Fonts -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/scrollreveal.min.js') }}" defer></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">DASHBOARD</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGIN</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <main class="main">
        <section class="home container" id="home">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <section class="swiper-slide">
                        <div class="home_content grid">
                            <div class="home_group">
                                <img src="assets/img/dashboard1-img.png" alt="" class="home_img">

                                <div class="home_indicator"></div>
                                <div class="home_details-img">
                                    <h4 class="home_details-title">"Spooky Hollow"</h4>
                                    <span class="home_details-subtitle">The living pumpkin</span>
                                </div>
                            </div>

                            <div class="home_data">
                                <h3 class="home_subtitle">#1 Scariest Ghost</h3>
                                <h2 class="home_title">OOOUUU <br> TRICK OR <br> TREAT!!!</h2>
                                <p class="home_description">Sleepy Hollow is a small, very quiet town said to be under
                                    some kind of enchantment. Its residents all seem to move a
                                    little slower, daydream a little more, and be more prone to believe in the
                                    supernatural.</p>

                                <div class="home_buttons">
                                    <div class="button">
                                        <x-nav-link :href="route('dashboard')"
                                            :active="request()->routeIs('dashboard')"
                                            style="color: black">
                                            {{ __('Shop here') }}
                                            <i class='bx bx-right-arrow-alt button_icon'></i>
                                        </x-nav-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="swiper-slide">
                        <div class="home_content grid">
                            <div class="home_group">
                                <img src="assets/img/dashboard2-img.png" alt="" class="home_img">

                                <div class="home_indicator"></div>
                                <div class="home_details-img">
                                    <h4 class="home_details-title">"Ardino & Grahami"</h4>
                                    <span class="home_details-subtitle">No words are to be spoken about them</span>
                                </div>
                            </div>

                            <div class="home_data">
                                <h3 class="home_subtitle">#1 Best Haunting Duo</h3>
                                <h2 class="home_title">BRING BACK <br> MY STOLEN <br> SOUL!!!</h2>
                                <p class="home_description">Their souls were stolen by a witch and were left wondering
                                    the earth for the rest of eternity in search of their souls.</p>

                                <div class="home_buttons">
                                    <div class="button">
                                        <x-nav-link :href="route('dashboard')"
                                            :active="request()->routeIs('dashboard')"
                                            style="color: black">
                                            {{ __('Shop here') }}
                                            <i class='bx bx-right-arrow-alt button_icon'></i>
                                        </x-nav-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="swiper-slide">
                        <div class="home_content grid">
                            <div class="home_group">
                                <img src="assets/img/dashboard3-img.png" alt="" class="home_img">

                                <div class="home_indicator"></div>
                                <div class="home_details-img">
                                    <h4 class="home_details-title">"Ghost Rider"</h4>
                                    <span class="home_details-subtitle">The blazing skull</span>
                                </div>
                            </div>

                            <div class="home_data">
                                <h3 class="home_subtitle">Sold his soul</h3>
                                <h2 class="home_title">YOUR SOUL <br> IS ALL <br> I NEED!!!</h2>
                                <p class="home_description">The ghost rider was previously a man who sold his soul to
                                    the devil, in exchange he got eternal life but every night he must find souls to
                                    consume, his skull burns as he rides around on his blazing bike</p>

                                <div class="home_buttons">
                                    <div class="button">
                                        <x-nav-link :href="route('dashboard')"
                                            :active="request()->routeIs('dashboard')"
                                            style="color: black">
                                            {{ __('Shop here') }}
                                            <i class='bx bx-right-arrow-alt button_icon'></i>
                                        </x-nav-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </section>
    </main>
</body>

</html>
