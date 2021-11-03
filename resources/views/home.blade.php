@extends('layouts.main')

@section('title','Home')
    
@section('contain')
    <div class="container">
        
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-12 col-md-6 col-lg-4 card">
                    <h1>{{ $movie['title'] }}</h1>
                    <h2>{{ $movie['original_title'] }}</h2>
                    <p>{{ $movie['nationality'] }}</p>
                    <p>{{ $movie['date'] }}</p>
                    <p>{{ $movie['vote'] }}</p>
                </div> 
                @endforeach
            </div>
        
    </div>
@endsection