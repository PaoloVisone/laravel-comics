@extends('layouts.master')

@php
    $cards = config('comics')
@endphp

@section("main")
<main>
    {{-- Jumbotron --}}
    <div  class="position-relative">
        <img class="" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron" style="object-position: top; height: 500px; object-fit: cover; width: 100%">
        <div class="position-absolute top-100 start-50 bg-primary px-3 py-2 text-white" style="z-index: 1; transform: translateX(-660px) translateY(-50%);">
            CURRENT SERIES
        </div>
    </div>

    <div class="container-fluid bg-dark text-white py-5">

        <div class="row row-cols-6 justify-content-center">

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