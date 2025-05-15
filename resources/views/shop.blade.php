{{-- Layout --}}
@extends('layouts.master')

{{-- Importo il file con lista di tutti i fumetti  --}}
@php
    $cards = config('comics')
@endphp

{{-- Contenuto della homepage --}}
@section("main")
<main>
 {{-- BUY-COMICS --}}
    <x-buy>
    </x-buy>
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

                <x-slot:price>
                    {{ $card['price'] }}
                </x-slot>

            </x-card>
            @endforeach

            <button type="button" class="btn btn-primary">LOAD MORE</button>
            
        </div>
    </div>
</main>
@endsection