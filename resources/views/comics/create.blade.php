@extends('layouts.app')

@section('title', 'Comic create')

@section('content')
    <main>
        <section class="section-one">
            <div class="container mt-5">
                <div class="title-relative text-light fw-bolder">CURRENT SERIES</div>
            </div>
        </section>
        <section class="section-two">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Inserire titolo" class="form-control">
                <input type="text" name="description" placeholder="Inserire descrizione" class="form-control">
                <input type="text" name="price" placeholder="Inserire prezzo" class="form-control">
                <input type="text" name="type" placeholder="Inserire tipologia" class="form-control">
                <input type="text" name="title" placeholder="Inserire titolo" class="form-control">
                <button type="submit">Invia</button>
            </form>

            <div class="text-center">
                <a href="{{ route('comics.index') }}" class="btn btn-light fw-bolder mb-5">BACK</a>
            </div>
            </div>
        </section>
    </main>
@endsection
