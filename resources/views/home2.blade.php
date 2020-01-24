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
                    @if (is_null($product->image))
                        src="https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F200108214800-coronavirus.jpg"
                    @else
                        src="{{ asset ( 'storage/' . $product->image ) }}"
                    @endif

                    class="product--list__img"
                />
                <p class="product--list__description">{{ $product->description }}</p>
                <h4 class="product--list__price">{{ $product->price }}</h4>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 1em">
        {{ $products->links() }}
    </div>

@endsection
