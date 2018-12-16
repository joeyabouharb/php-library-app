@extends('shared.layouts.layout')

@section('content')

<div class="jumbotron ">
    <h1> Library Book Service <h1>
<p> Welcome to the online library! Reserve your books here! </p>
    </div>
    @include('shared.inc.searchbar')
    @if(count($books) > 0)
   
    @include('shared.inc.results')


    @endif
@endsection

        