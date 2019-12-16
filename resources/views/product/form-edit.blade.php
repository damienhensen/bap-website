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
    <div class="form__title"><h3>Edit product</h3></div>
    <form action="{{ route('CMS-edit.store', ['id' => $product->id]) }}" METHOD="POST" enctype="multipart/form-data" class="form__content" id="product__form--create">
        @csrf
        <label>Titel</label> <br>
        <input class="product__form--title @error('title') is-invalid @enderror" type="text" name="title" value="{{ $product->name }}"> <br>
        @error('title')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        <label>Beschrijving (Kort)</label> <br>
        <textarea class="product__form--description @error('description') is-invalid @enderror" name="description">{{ $product->description }}</textarea> <br>
        @error('description')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        <label>Beschrijving (Compleet)</label> <br>
        <textarea class="product__form--details @error('details') is-invalid @enderror" name="details">{{ $product->details }}</textarea> <br>
        @error('details')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        <label>Image</label> <br>
        <input class="product__form--image @error('image') is-invalid @enderror" type="file" name="image" value="{{ $product->image }}"> <br>
        @error('image')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        <label>Image URL</label> <br>
        <input class="product__form--image2 @error('image2') is-invalid @enderror" type="text" name="image2" value="{{ $product->imagelink }}"> <br>
        @error('image2')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        <label>Prijs</label> <br>
        <input class="product__form--price @error('price') is-invalid @enderror" type="text" name="price" value="{{ $product->price }}"> <br>
        @error('price')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        <label>Datum toegevoegd</label> <br>
        <input class="product__form--date @error('date') is-invalid @enderror" type="date" name="date" value="{{ $product->pubdate }}"> <br>
        @error('date')
        <div class="error-message">
            {{ $message }}
        </div>
        @enderror
        <input type="submit" value="Edit!" name="editProduct" id="post__form--submit">
    </form>
</div>

@endsection
