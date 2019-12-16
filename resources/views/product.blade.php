@extends('layouts.master')

@section('title')
    {{ $bedrijf->name }}
@endsection

@section('header')
    <h1>{{ $bedrijf->name }}</h1>
@endsection

@section('content')
    {{ $bedrijf->address }} <br />
    {{ $bedrijf->zipcode }} <br />
    {{ $bedrijf->city }} <br />
    {{ $bedrijf->country }} <br />
    {{ $bedrijf->phone }} <br />

    <p>
        {{ $bedrijf->description }}
    </p>

    <a href="{{ route('bedrijven.list') }}">Terug naar bedrijven overzicht</a>
@endsection
