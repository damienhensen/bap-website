@extends('layouts.master')

@section('styles')
    <link href="/css/app.css" rel="stylesheet">
@endsection

@section('header')
    <h1>Home</h1>
@endsection

@section('content')
    <ul>

    @foreach($products as $product)
            <li>{{ $product }}</li>
    @endforeach

    </ul>

    <p>Hier komen later dingen uit de DB</p>
@endsection
