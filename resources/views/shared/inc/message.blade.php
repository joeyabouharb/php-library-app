@if(session('success'))

<div class="alert alert-success">
  <p>{{session('success')}}</p>
</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

@if ($errors->any())
<div class="alert">
    <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
