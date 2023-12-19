@php
    $navbar = config('db.navbar');
@endphp
<div class="d-flex justify-content-center flex-wrap">
    @foreach ($navbar as $item)
        <li class="m-sm-3 list-unstyled">
            <a href="#" class="text-dark text-decoration-none">{{ $item['text'] }}</a>
        </li>
    @endforeach
</div>
