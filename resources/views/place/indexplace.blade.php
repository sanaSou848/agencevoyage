@extends('index')
@section('content')

@if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('message') }}
        </div>
@endif
@if (session('successDelete'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successDelete') }}
        </div>
@endif


<a href="{{route('place.create')}}" class="btn btn-info">Add place</a>
<div class="title m-b-md">
 @if(count($places)>0)
<ul class="list-group">
@foreach($places as $mesplaces)
<li class="list-group-item">
{{$mesplaces->place}}
<img src ="{{asset('images/'.$mesplaces->photo)}}">



<form action="{{route('place.destroy',['place'=>$mesplaces->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
</form>

<a href="{{route('place.edit',['client'=>$mesplaces->id])}}" class="btn btn-info">Editer</a>

</li>



@endforeach
</ul>
@else
    <h2 class="text-center py-4"> il n'y a pas de place</h2>
@endif
</div>

@endsection 