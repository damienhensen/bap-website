@extends('layouts.master')



@section('header')
    <h3>Make post</h3>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Er zijn fouten in de formulier</p>
        </div>
    @endif

    <div id="form__parent">
        <form action="{{ route('product.store') }}" METHOD="POST" id="product__form--create">
            @csrf
            <label>Title</label> <br>
            <input class="product__form--title @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}"> <br>
            @error('title')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <label>Description</label> <br>
            <textarea class="product__form--description @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea> <br>
            @error('description')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <label>Price</label> <br>
            <input class="product__form--price @error('price') is-invalid @enderror" type="text" name="price" value="{{ old('price') }}"> <br>
            @error('price')
                <div class="error-message">
                    {{ $message }}
                </div>
            @enderror
            <label>Date</label> <br>
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
