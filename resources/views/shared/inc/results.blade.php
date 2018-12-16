<ul class="list-group d-flex flex-column ">
    <li class="list-group-item list-group-item-primary d-flex flex-row text-center">
        <span class="col">ISBN</span>
        <span class="col">Title</span>
        <span class="col">Author</span>
        
    </li>
@foreach($books as $book)

<a href="/book/details/{{$book->ISBN}}" class="list-group-item list-group-item-action list-group-item-secondary d-flex flex-row text-center">
<span class="col ">{{$book->ISBN}}</span>
<span class="col">{{$book->title}}</span>
<span class="col">{{$book->first_name}} {{$book->last_name}}</span>
</a>

@endforeach
</ul>
<p>{{$books->links()}}</p>
