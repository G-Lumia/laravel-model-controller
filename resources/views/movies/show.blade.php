@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $movie->title }}</h1>
        <p>{{ $movie->original_title }}</p>
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">

    </section>
@endsection
