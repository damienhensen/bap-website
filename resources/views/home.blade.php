@extends('layouts.master')

@section('header')
    <h1>Home</h1>
@endsection

@section('content')
    <div class="product--list">
        @foreach($products as $product)
            <div class="product--list__product">
                <h2 class="product--list__title"><a href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a></h2>
                <img
{{--                    src="@if (is_null($product->image)) {{ $product->imagelink }} @else {{ $product->image }} @endif"--}}
                    src="https://damienhensen.nl/portfolio/images/projects/MyBand.png"
                    class="product--list__img"
                />
                <p class="product--list__description">{{ $product->description }}</p>
                <h4 class="product--list__price">{{ $product->price }}</h4>
            </div>
        @endforeach
    </div>
@endsection
