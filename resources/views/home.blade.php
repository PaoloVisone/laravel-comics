@extends('layouts.master')

@php
    $cards = config('comics')
@endphp

@section("main")
<main>
    <div class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron" style="object-position: top; height: 500px; object-fit: cover; width: 100%">
    </div>

    <div class="container-fluid bg-dark text-white py-4">


        <div class="row row-cols-6 justify-content-center mx-5">

            {{-- Cards --}}
            @foreach ($cards as $card)
            <x-card>

                <x-slot:title>
                    {{ $card['title'] }}
                </x-slot>

                <x-slot:thumb>
                    {{ $card['thumb'] }}
                </x-slot>
                
            </x-card>
            @endforeach

            <button type="button" class="btn btn-primary">LOAD MORE</button>
            
        </div>
    </div>
</main>
@endsection