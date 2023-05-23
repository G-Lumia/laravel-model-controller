@extends('layouts.app')

@section('content')
    <section class="container d-flex">
        <div class="p-3">
            <h1>{{ $movie->title }}</h1>
            <p>{{ $movie->original_title }}</p>
            <img class="showImg" src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </div>
        <div class="d-flex flex-column justify-content-center px-5">
            <div>
                <h3>Nationality: </h3>
                <p>
                    {{$movie->nationality}}
                </p>
            </div>
            <div>
                <h3>Date: </h3>
                <p>
                    {{$movie->date}}
                </p>
            </div>
            <div>
                <h3>Vote: </h3>
                <p>
                    {{$movie->vote}}
                </p>
            </div>
        </div>
    </section>
    <a href="{{ route('movies.index')}}"> Go back </a>
@endsection
