@extends('layouts.base')

@section('title', 'Continents')

@section('content')
<div class='flex col fluid justify-center align-center'>
    <h1 class='text-center mb-1'>Simple Geography Quiz</h1>
    <p class='text-center mb-4'>Developed by Timothy Batt</p>

    <h2 class='text-center mb-2'>Pick a continent</h2>
    <section class='region-selection'>
        
        @foreach ($continents as $continent )
            <div class='select-region card' onclick='goToRegion("{{ $continent->name }}");'>
                <h3>{{ $continent->name }}</h3>
                <img src='{{ $continent->image_url }}' alt='Image of {{ $continent->name }}' >
            </div>
        @endforeach

    </section>
    <p class='text=center m-2'><a href='/attribution'>Continent Image Attribution</a></p>

</div>

@endsection