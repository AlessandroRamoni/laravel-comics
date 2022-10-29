@extends('layouts.app')

@section('nomePerIlCollegamento')
    <div class="container-fumetti">
        <div class="copertine">
            @foreach ($comics as $item => $formato)
                <div class="card">
                    <div class="contenitore-immagine">
                        <img src="{{ $formato['thumb'] }}" alt="{{ $formato['title'] }}">
                    </div>
                    <div class="contenitore-titolo">
                        <h2>
                            {{ $formato['title'] }}
                        </h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
