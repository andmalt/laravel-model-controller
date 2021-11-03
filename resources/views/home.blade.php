@extends('layouts.main')

@section('title','Home')
    
@section('contain')
    <div class="container p-4">
        
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-12 col-md-6 col-lg-3 card">
                    <h3>Titolo: {{ $movie['title'] }}</h3>
                    <h5>Titolo Originale: {{ $movie['original_title'] }}</h2>
                    <p>Nazionalità; {{ $movie['nationality'] }}</p>
                    <h6>Data di uscita: {{ $movie['date'] }}</h6>
                    <p>Voto: {{ $movie['vote'] }}</p>
                </div> 
                @endforeach
            </div>
        
    </div>
@endsection