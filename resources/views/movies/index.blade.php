@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Your Movies</h1>
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 p-3 movieCard">
                <a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}
                    <img src="{{ $movie->image}}" alt="{{ $movie['title'] }}">
                </a>
            </div>
            @endforeach
        </div>
    </section>
@endsection
