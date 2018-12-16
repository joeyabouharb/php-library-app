@extends('shared.layouts.layout')

@section('content')
<h1>Book Details</h1>
<div class="row justify-content-center">
<div class="card w-50">
@if($data == true)

<h3 class="card-title">{{$data["book"]->title}}</h3>
<small class="align-self-start">By: {{$data["book"]->first_name}} {{$data["book"]->last_name}}</small>

<p> Genre: {{$data["genre"]}}</p>
<p> Publisher: {{$data["publisher"]}}</p>

<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptatum soluta repellat enim, cum laboriosam expedita explicabo reprehenderit quaerat nobis dolorum aspernatur rerum sit culpa, accusamus corrupti harum eum iste.</p>
@endif
</div>

</div>
<a class="btn btn-transparent" href="/">Go Back</a>
@endsection