@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Welcome</h1>
        <p>Movie Selector 3.0</p>
        <a href="{{ route('movies.index') }}">Go to your movies list</a>
    </section>
@endsection
