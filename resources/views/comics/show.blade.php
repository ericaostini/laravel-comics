@extends('layouts.app')

@section('title', $comic['title'])

@section('content')
    <main>
        <section class="section-one">
            <div class="container mt-5">
                <div class="title-relative text-light fw-bolder">CURRENT SERIES</div>
            </div>
        </section>
        <section class="section-two">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                    <div class="col-8 text-light">
                        <h6>{{ $comic->title }}</h6>
                        <p>{{ $comic->description }}</p>
                        <p>Price: {{ $comic->price }}</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('comics.index') }}" class="btn btn-light fw-bolder mb-5">BACK</a>
            </div>
            </div>
        </section>
    </main>
@endsection
