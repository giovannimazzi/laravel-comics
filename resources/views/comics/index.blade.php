@extends('layouts.app')

@section('title', 'DC Comics')

@section('content')

<section>
    <img class="w-100" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
</section>

<section class="bg-dark text-white py-5">
    <div class="container">
        <h2 class="text-uppercase mb-4">Current Series</h2>

        <div class="row">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="comic-card">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h5 class="text-uppercase mt-3">{{ $comic['series'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection