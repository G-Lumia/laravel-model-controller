@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="p-3">
            <h1>{{ $movie->title }}</h1>
            <p>{{ $movie->original_title }}</p>
            <img class="showImg" src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </div>
        <a href="{{ route('movies.index')}}"> Go back </a>
    </section>
@endsection
