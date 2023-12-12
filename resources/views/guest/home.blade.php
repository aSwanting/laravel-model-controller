@extends('layouts.app')
@section('title', 'home sweet home')
@section('main')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 gy-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3>{{ $movie->title }}</h2>
                                <p>{{ $movie->original_title }}</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $movie->nationality }}</li>
                                <li class="list-group-item">{{ $movie->date }}</li>
                                <li class="list-group-item">{{ $movie->vote }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
