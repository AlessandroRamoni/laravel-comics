@extends('layouts.app')

@section('nomePerIlCollegamento')
    <div class="container-fumetti">
        <div class="copertine">
            @foreach ($comics as $item => $elemento)
                <div class="card">
                    <div class="contenitore-immagine">
                        <img src="{{ $elemento['thumb'] }}" alt="{{ $elemento['title'] }}">
                    </div>
                    <div class="contenitore-titolo">
                        <h2>
                            {{ $elemento['title'] }}
                        </h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
