@extends('layouts.app')

@section('nomePerIlCollegamento')
    <div class="container">
        <div class="copertine">
            @foreach ($comics as $item => $formato)
                <div class="card">
                    <img src="{{ $formato['thumb'] }}" alt="{{ $formato['title'] }}">
                    <h2>
                        {{ $formato['title'] }}
                    </h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
