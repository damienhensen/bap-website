@extends('layouts.master')

@section('header')
    <h1>Maak product</h1>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-bad">
            <p>Er zitten fouten in de formulier</p>
        </div>
    @endif

    <div class="form__div">
        <div class="form__title"><h3>Maak product</h3></div>
        <form action="{{ route('CMS.store') }}" METHOD="POST" enctype="multipart/form-data" class="form__content" id="product__form--create">
            @csrf
            <label>Titel</label> <br>
            <input class="product__form--title @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}"> <br>
            @error('title')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <label>Beschrijving (Kort)</label> <br>
            <textarea class="product__form--description @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea> <br>
            @error('description')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <label>Beschrijving (Compleet)</label> <br>
            <textarea class="product__form--details @error('details') is-invalid @enderror" name="details">{{ old('details') }}</textarea> <br>
            @error('details')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <label>Image</label> <br>
            <input class="product__form--image @error('image') is-invalid @enderror" type="file" name="image" value="{{ old('image') }}"> <br>
            @error('image')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <label>Prijs</label> <br>
            <input class="product__form--price @error('price') is-invalid @enderror" type="text" name="price" value="{{ old('price') }}"> <br>
            @error('price')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <label>Datum toegevoegd</label> <br>
            <input class="product__form--date @error('date') is-invalid @enderror" type="date" name="date" value="{{ old('date') }}"> <br>
            @error('date')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <input type="submit" value="Make!" name="saveProduct" id="post__form--submit">
        </form>
    </div>

    <div class="form__div">
        <div class="form__title"><h3>Verwijder product</h3></div>
        <form action="{{ route('CMS.store') }}" METHOD="POST" class="form__content" id="product__form--delete">
            @csrf
            <p>Er zijn {{ $ProductTotal }} producten</p>
            <label>ID</label> <br>
            <input class="product__form--id @error('id') is-invalid @enderror" type="text" name="id" value="{{ old('id') }}"> <br>
            @error('id')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <input type="submit" value="Delete!" name="deleteProduct" id="post__form--submit">
        </form>
    </div>

    <div class="form__div">
        <div class="form__title"><h3>Update product</h3></div>
        <form action="{{ route('CMS.store') }}" METHOD="POST" class="form__content" id="product__form--update">
            @foreach($products as $product)
                <p class="product--list__title"><span>{{ $product->id }}</span> <a href="{{ route('CMS-edit', ['id' => $product->id]) }}">{{ $product->name }}</a></p>
            @endforeach
        </form>
    </div>
@endsection
