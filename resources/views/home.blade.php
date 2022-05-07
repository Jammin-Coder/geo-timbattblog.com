@extends('layouts.base')

@section('title', 'Continents')

@section('content')
<div class='flex col fluid justify-center align-center'>
    <h1 class='text=center mb=2'>Pick a Continent</h1>
    <section class='region-selection'>
        
        @foreach ($continents as $continent )
            <div class='select-region card' onclick='goToRegion("{{ $continent->name }}");'>
                <p>{{ $continent->name }}</p>
                <img src='{{ $continent->image_url }}' >
            </div>
        @endforeach

    </section>
</div>

@endsection