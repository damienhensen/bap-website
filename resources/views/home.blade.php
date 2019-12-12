@extends('layouts.master')

@section('styles')
    <link href="/css/app.css" rel="stylesheet">
@endsection

@section('header')
    <h1>Home</h1>
@endsection

@section('content')
    <ul>

    @foreach($posts as $post)
        @if($post == 'a')
            <li><strong>{{ $post }}</strong></li>
        @else
            <li>{{ $post }}</li>
        @endif
    @endforeach

    </ul>

    <p>Is this content?</p>
@endsection
