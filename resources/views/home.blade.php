@extends('layouts.app')

@section('title', 'Home')

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
                    @foreach ($comics as $comic)
                        <div class="col-12 col-md-3 col-lg-2">
                            <div>
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <h6 class="text-light p-3 text-center">{{ $comic['title'] }}</h6>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

@endsection
