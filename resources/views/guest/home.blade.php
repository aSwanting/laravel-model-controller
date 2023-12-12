@extends('layouts.app')
@section('title', 'home sweet home')
@section('main')
    <div class="container-fluid">
        <div class="grid-wrapper">
            @foreach ($movies as $movie)
                <div class="grid-item">
                    <div class="movie-card">
                        <div class="movie-card-header">
                            <h3>{{ $movie->title }}</h3>
                            <p>{{ $movie->original_title }}</p>
                        </div>
                        <ul class="movie-details">
                            <li>
                                <p>Nationality</p>
                                <p>{{ $movie->nationality }}</p>
                            </li>
                            <li>
                                <p>Release Date:</p>
                                <p>{{ $movie->date }}</p>
                            </li>
                            <li>
                                <p>Rating</p>
                                <p>{{ $movie->vote }}</p>
                            </li>
                        </ul>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
