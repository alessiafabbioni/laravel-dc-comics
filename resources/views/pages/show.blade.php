@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>Comic:</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $comic -> title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic -> author}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic -> genre}}</h6>
            <p class="card-text">{{ $comic -> description}}</p>
            <span class="card-text">{{ $comic -> publication_year}}</span>        
        </div>
    </div>
    
        
        
        
      
@endsection
