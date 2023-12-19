@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h1>Homepage</h1>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <p>{{ $comic['title'] }}</p>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection
