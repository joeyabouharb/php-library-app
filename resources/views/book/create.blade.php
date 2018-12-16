@extends('shared.layouts.layout')

@section('content')

<h1>Add Book</h1>
<div class="d-flex flex-row justify-content-center">
<form class="flex-fill" method="POST" action="/book/add">
    @csrf
<div class="form-group d-flex flex-row">
    <label class="col-sm-5 mt-auto mb-auto" for="ISBN">ISBN</label>
    <input class="col-sm-5 form-control" name="ISBN" type="text"/>
</div>
<div class="form-group d-flex flex-row">
        <label class="col-sm-5 mt-auto mb-auto" for="title">Title</label>
        <input class="col-sm-5 form-control" name="title" type="text"/>
</div>
<div class="form-group d-flex flex-row">
        <label class="col-sm-5 mt-auto mb-auto" for="first_name">First Name</label>
        <input class="col-sm-5 form-control" name="first_name" type="text"/>
</div>
<div class="form-group d-flex flex-row">
        <label class="col-sm-5 mt-auto mb-auto" for="last_name">Last Name</label>
        <input class="form-control col-sm-5" name="last_name" type="text"/>
</div>
<div class="form-group d-flex flex-row">
        <label class="col-sm-5 mt-auto mb-auto" for="genre_id">Genre</label>
        <select class="custom-select col-sm-5" name="genre_id">
                @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach
        </select>
</div>
<div class="form-group d-flex flex-row">
        <label class="col-sm-5 mt-auto mb-auto" for="publisher_id">Publisher</label>
        <select class="custom-select col-sm-5" name="publisher_id">
            @foreach($publishers as $publisher)
        <option value="{{$publisher->id}}">{{$publisher->publisher_name}}</option>
            @endforeach
            
        </select>
</div>
 <button class="btn btn-primary" type="submit">Submit</button>
    @if ($errors->any())
    <div class="alert">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
</div>
<a class="btn btn-transparent" href="/home">Go Back</a>
@endsection