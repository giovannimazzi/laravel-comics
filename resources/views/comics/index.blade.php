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
            {{-- Qui le card dei fumetti --}}
        </div>
    </div>
</section>

@endsection