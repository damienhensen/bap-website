@extends('layouts.master')

@section('title')
    {{ $product->name }}
@endsection

@section('header')
    <h1>{{ $product->name }}</h1>
@endsection

@section('content')
{{--    <p>Indicator <span id="img--no">0</span> </p>--}}
    <p class="product--details__price">{{ $product->price }}</p>
    <button id="product--details__order">Koop nu!</button>
    <div class="product--details__main">
        <div id="product--details__carousel">
            <button class="previous--img"></button>
            <div class="img--here">
                @for($i = 0; $i < 5; $i++)
                    <img src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F200108214800-coronavirus.jpg" alt="Image{{ $i }}" class="product--details__carousel--img">
                @endfor
            </div>
            <button class="next--img"></button>
        </div>

        <p class="product--details__details">
            {{ $product->details }}
        </p>
    </div>

@endsection

@section('scripts')
    <script src="/js/carousel.js" type="text/javascript"></script>
@endsection
