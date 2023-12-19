@php
    $navbar = config('db.navbar');
@endphp
<div class="container">
    <div class="d-flex justify-content-between flex-wrap align-items-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        @foreach ($navbar as $item)
            <li class="m-sm-3 list-unstyled">
                <a href="#" class="text-dark text-decoration-none">{{ $item['text'] }}</a>
            </li>
        @endforeach
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="search">
        </div>
    </div>
</div>
