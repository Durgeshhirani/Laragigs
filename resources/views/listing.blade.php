{{-- <h1>{{$id}}</h1> --}}
@extends('layout')

@section('content')
    @include('partials._search')
    <h1>{{ $listing['id'] }}</h1>
    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['description'] }}</p>
@endsection
