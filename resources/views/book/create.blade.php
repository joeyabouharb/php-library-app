@extends('shared.layouts.layout')

@section('content')

@include('shared.inc.message')
<div class="shadow bg-white p-4">
        <h1>Add Book</h1>
<form method="POST" action="/book/add/{request}">
    @csrf
<div class="form-group row">
    <label class="col-sm-5 mt-auto mb-auto" for="ISBN">ISBN</label>
    <input required pattern="^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$" class="col-sm-5 form-control" name="ISBN" type="text" />
</div>
<div class="form-group row">
        <label class="col-sm-5 mt-auto mb-auto" for="title">Title</label>
        <input required class="col-sm-5 form-control" name="title" type="text"/>
</div>
<div class="form-group row">
        <label class="col-sm-5 mt-auto mb-auto" for="first_name">First Name</label>
        <input required class="col-sm-5 form-control" name="first_name" type="text"/>
</div>
<div class="form-group row">
        <label class="col-sm-5 mt-auto mb-auto" for="last_name">Last Name</label>
        <input required class="form-control col-sm-5" name="last_name" type="text"/>
</div>
<div class="form-group row">
        <label class="col-sm-5 mt-auto mb-auto" for="genre_id">Genre</label>
        <select required class="custom-select col-sm-5" name="genre_id">
                @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach
        </select>
</div>
<div class="form-group row">
        <label class="col-sm-5 mt-auto mb-auto" for="publisher_id">Publisher</label>
        <select required class="custom-select col-sm-5" name="publisher_id">
            @foreach($publishers as $publisher)
        <option value="{{$publisher->id}}">{{$publisher->publisher_name}}</option>
            @endforeach
            
        </select>
</div>
 <button class="btn btn-primary" type="submit">Submit</button>
 
</form>
</div>
<a class="btn btn-transparent" href="/home">Go Back</a>
@endsection