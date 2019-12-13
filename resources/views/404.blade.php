@extends('layouts.master')

@section('styles')
    <link href="/css/app.css" rel="stylesheet">
@endsection

@section('header')
    <h1>404</h1>
@endsection

@section('content')
    <div class="PAGE--ERROR">
        <h2>Pagina "<span class="PAGE--ERROR__link">{{ url()->current() }}</span>" bestaat niet <span class="PAGE--ERROR__sad">: (</span></h2>
    </div>
@endsection
