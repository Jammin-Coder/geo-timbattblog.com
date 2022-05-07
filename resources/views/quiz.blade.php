@extends('layouts.base')

@section('title', 'TEST')

@section('content')
<div class='fluid flex col gap-2 justify-center align-center'>
    <h1 class='message text-center mb-2'>What country is this?<h1>
    <div class='flex justify-center'>
        <img src="/static/maps/{{ strtolower($continent) }}/{{ $iso }}/256.png" alt="" class='quiz-image'>
    </div>

    <div class='answers-row'>
        @foreach ( $answers as $answer )
            <div class='answer' onclick="handleQuizAnswer('{{ $answer }}', '{{ $country }}' )">{{ $answer }}</div>
        @endforeach
    </div>
    <div class='flex justify-center'>
        <div class='quiz-next btn'>Next</div>
    </div>
    
</div>

@endsection