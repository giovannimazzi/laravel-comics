@props(['comic'])

<div class="comic-card">
    <img
        class="img-fluid w-100"
        src="{{ $comic['thumb'] }}"
        alt="{{ $comic['title'] }}"
    >

    <h6 class="text-uppercase mt-3 small">
        {{ $comic['series'] }}
    </h6>
</div>