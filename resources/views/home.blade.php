@extends('layouts.master')

@section('styles')
    @parent
@endsection

@section('header')
    <h2>Welkom op de homepage {{ $voornaam }}</h2>
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
