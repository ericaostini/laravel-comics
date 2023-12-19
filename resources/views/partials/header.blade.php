@php
    $navbar = config('db.navbar');
@endphp
<header>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            @foreach ($navbar as $item)
                <li class="list-unstyled">
                    <a href="#" class="text-dark text-decoration-none">{{ $item['text'] }}</a>
                </li>
            @endforeach
            <div>
                <input type="text" class="form-control" placeholder="search">
            </div>
        </div>
    </div>
</header>
