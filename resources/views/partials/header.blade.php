@php
    $navbar = config('db.navbar');
@endphp
<header>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            <ul class="d-flex">
                <li class="list-unstyled mx-3">
                    <a href="{{ route('home') }}" class="text-dark text-decoration-none">HOME</a>
                </li>
                <li class="list-unstyled  mx-3">
                    <a href="{{ route('comics.index') }}" class="text-dark text-decoration-none">COMICS</a>
                </li>
                <li class="list-unstyled  mx-3">
                    <a href="#" class="text-dark text-decoration-none">FILMS</a>
                </li>
            </ul>
            <div>
                <input type="text" class="form-control" placeholder="search">
            </div>
        </div>
    </div>
</header>
