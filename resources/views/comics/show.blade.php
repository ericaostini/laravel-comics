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
                    <div class="col-12">
                        <div>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h6>{{ $comic['title'] }}</h6>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn text-light fw-bolder mb-5">LOAD MORE</button>
                </div>
            </div>
        </section>
    </main>
@endsection
