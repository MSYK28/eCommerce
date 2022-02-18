<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Results') }}
        </h2>
    </x-slot>

    {{-- NP RESULTS IN DATABASE --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="empty_cart">
                        <p style="color: black">
                            Oops! We didnt find anyting from your search! <br>
                            <Button class="">
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        <i style="color: black; padding-right:5px"
                                            class='bx bx-cart-alt trick_icon'></i>
                                        {{ __('Search other items') }}
                                    </x-nav-link>
                                </div>
                            </Button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SEARCH RESULT POSITIVE --}}
    <div class="search_results">
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
            </div>
        </section>

        <section class="search_results">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Filter Example | CodeChief') }}</div>

                            <form action="{{ route('filter') }}" method="GET" style="margin-top: 20px;">
                                <select name="price_id" id="input">
                                    <option value="0">Select Price</option>
                                    @foreach (\App\Models\Price::select('id', 'price')->get() as $price)
                                        <option value="{{ $price->id }}"
                                            {{ $price->id == $selected_id['price_id'] ? 'selected' : '' }}>
                                            {{ $price['price'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <select name="color_id" id="input">
                                    <option value="0">Select Color</option>
                                    @foreach (\App\Models\Color::select('id', 'name')->get() as $color)
                                        <option value="{{ $color->id }}"
                                            {{ $color->id == $selected_id['color_id'] ? 'selected' : '' }}>
                                            {{ $color['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="submit" class="btn btn-danger btn-sm" value="Filter">
                            </form>


                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Color</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($product as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            {{-- <td>{{ $product->price->price }}</td> --}}
                                            {{-- <td>{{ $product->color->name }}</td> --}}
                                        </tr>
                                    @empty
                                        <p> No data Found </p>
                                    @endforelse

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
