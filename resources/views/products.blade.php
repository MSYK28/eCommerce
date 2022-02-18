@extends('layout')

@section('content')
    <div class="search_bar">
        <div class="form">
            <i class="fa fa-search"></i>
            <input type="text" style="color: black; border: 2px solid black" class="form-control form-input"
                placeholder="Search anything...">
        </div>
    </div>
    
    <section class="section trick" id="trick">
        <div class="trick_container container grid">
            @foreach ($products as $product)
                <div class="trick_content">
                    {{-- <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="trick_content"> --}}
                    <img src="{{ $product->image }}" alt="">
                    <img src="assets/img/trick-treat2-img.png" alt="" class="trick_img">

                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->category }}</p>
                        <p><strong>Price: </strong> Ksh. {{ $product->price }}</p>
                        <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}"
                                class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        {{-- </div>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
