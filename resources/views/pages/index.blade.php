@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics Archives:</h1>
    
       
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic -> id}}</th>
                            <td>{{ $comic -> title}}</td>
                            <td>{{ $comic -> author}}</td>
                            <td>{{ $comic -> genre}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
        
        
      
@endsection
