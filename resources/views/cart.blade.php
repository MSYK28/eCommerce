<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cart
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- EMPTY CART --}}
                    <div class="empty_cart">
                        <p style="color: black">
                            Oops! You dont have anything in your cart yet! <br>
                            <Button class="">
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        <i style="color: black; padding-right:5px"
                                            class='bx bx-cart-alt trick_icon'></i> {{ __('Shop here') }}
                                    </x-nav-link>
                                </div>
                            </Button>
                        </p>
                    </div>

                    {{-- ITEMS IN CART --}}
                    <div class="flex flex-col" ) <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Product ID </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Category </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Price </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Quantity </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="">Action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                1 </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Sweets </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Toffee </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                200 </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                1 </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="">Remove</span>
                                            </th>
                                        </tr>
                                    </tbody>
                                    {{-- @foreach ($cartItems as $item)
                                        <tbody class="bg-white divide-y divide gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $item['id'] }} </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">
                                                        {{ $item['name'] }} </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">
                                                        Visuals </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">
                                                        {{ \Cart::Session(auth()->id())->get($item->id) > getPriceSum() }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">
                                                        <form action="{{ route('cart.update', $item->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="number" name="quantity"
                                                                value="{{ $item->quantity }}"
                                                                class="border-2 w-full p-4 rounded-lg">
                                                            <input type="submit" value="save">
                                                        </form>
                                                    </div>
                                                <td class="px-6 py-4 whitespace-nowrap text right text-sm font-medium">
                                                    <a href="{{ route('cart.destroy', $item->id) }}"
                                                        onclick="return confirm(" Are You Sure you want to Delete
                                                        Item?')" class="text-red-500 hover:text red-600">Delete</a>
                                                </td>
                                            </tr>
                                            <!-- More items... -->
                                        </tbody>
                                    @endforeach --}}
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
