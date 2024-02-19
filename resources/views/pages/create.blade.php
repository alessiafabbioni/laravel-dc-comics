@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>Add New Comic:</h1>
    <div class="container">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            @method('POST')
     
                
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Insert title"  class="mb-3">
           
             
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Insert author">
          
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" name="genre" id="genre" placeholder="Insert genre">
  

                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description"></textarea>
            
                    <label for="publication_year" class="form-label">Publication Year</label>
                    <input type="text" class="form-control" name="publication_year" id="publication_year" placeholder="Insert publication year">
            
                    <input type="submit" value="Create">
                



            
        </form>

        
    </div>
    
 
@endsection