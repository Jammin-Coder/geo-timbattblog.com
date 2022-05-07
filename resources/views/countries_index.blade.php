@extends('layouts.base')

@section('title', 'Countries' )

@section('content')

<div class='flex align-center col mb-4'>
    <div class='mb-2'>
        <h1 class='text-center mb-1'>{{ $continent }}</h1>
        <div><img src="/static/maps/{{ $continent }}/{{ $continent }}.png" alt="Image of {{ $continent }}"></div>
    </div>
    <div class='flex gap-2'>
        <a href="/{{ $continent }}/quiz" class='btn'><h3>Take quiz</h3></a>
    </div>
</div>
<div class='flex col fluid justify-center align-center'>
    <h2 class='text=center mb-2'>The territories of {{ $continent }}</h2>
    <section class='region-selection'>
        
        @foreach ($countries as $country)
            <div class='select-region card no-translate-on-hover'>
                <p class='header'>{{ $country['country'] }}</p>
                <img loading='lazy' src='/static/maps/{{ $continent }}/{{ $country["iso"] }}/256.png' class='fluid'>
            </div>
        @endforeach

    </section>
</div>

@endsection
