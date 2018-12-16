@extends('shared.layouts.layout')

@section('content')
@include('shared.inc.searchbar')
@if(count($books) > 0)

    @include('shared.inc.results')

@endif
<a class="btn btn-transparent" href="/">Go Back</p>
@endsection