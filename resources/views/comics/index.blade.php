@extends('layouts.app')

@section('title', 'DC Comics')

@section('content')

<section class="jumbotron"></section>

<section class="bg-dark text-white position-relative">
    <div class="container position-relative py-5">

        <div class="section-label position-absolute bg-primary text-white text-uppercase fw-bold fs-4 px-4 py-2">
            Current Series
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4 pt-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="comic-card">
                        <img class="img-fluid w-100" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

                        <h6 class="text-uppercase mt-3 small">
                            {{ $comic['series'] }}
                        </h6>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-primary rounded-0 text-uppercase fw-bold px-5">
                Load More
            </button>
        </div>

    </div>
</section>

<section class="bg-primary">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-5 g-4 py-4 text-white">

            <div class="col d-flex align-items-center gap-3">
                <img class="shop-bar-img" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span class="text-uppercase small">Digital Comics</span>
            </div>

            <div class="col d-flex align-items-center gap-3">
                <img class="shop-bar-img" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span class="text-uppercase small">DC Merchandise</span>
            </div>

            <div class="col d-flex align-items-center gap-3">
                <img class="shop-bar-img" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span class="text-uppercase small">Subscription</span>
            </div>

            <div class="col d-flex align-items-center gap-3">
                <img class="shop-bar-img" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span class="text-uppercase small">Comic Shop Locator</span>
            </div>

            <div class="col d-flex align-items-center gap-3">
                <img class="shop-bar-img" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span class="text-uppercase small">DC Power Visa</span>
            </div>

        </div>
    </div>
</section>

@endsection