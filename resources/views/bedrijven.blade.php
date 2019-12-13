@extends('layouts.master')

@section('styles')
    <link href="/css/app.css" rel="stylesheet">
@endsection

@section('header')
    <h1>Bedrijven</h1>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Address</td>
                <td>Zip</td>
                <td>City</td>
                <td>Country</td>
            </tr>
        </thead>
        <tbody>
        @foreach($bedrijven as $bedrijf)
            <tr>
                <td><a href="{{ route('bedrijven.details', ['id' => $bedrijf->id]) }}">{{ $bedrijf->name }}</a></td>
                <td>{{ $bedrijf->address }}</td>
                <td>{{ $bedrijf->zipcode }}</td>
                <td>{{ $bedrijf->city }}</td>
                <td>{{ $bedrijf->country }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
