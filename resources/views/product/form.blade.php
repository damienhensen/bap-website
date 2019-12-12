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
        <form action="{{ route('product.store') }}" METHOD="POST" class="form__content" id="product__form--create">
            @csrf
            <label>Titel</label> <br>
            <input class="product__form--title @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}"> <br>
            @error('title')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <label>Beschrijving</label> <br>
            <textarea class="product__form--description @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea> <br>
            @error('description')
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
            <input type="submit" value="Post!" name="savePost" id="post__form--submit">
        </form>
    </div>
@endsection
