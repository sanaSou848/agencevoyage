@extends('index')
@section('content')
<fieldset>
    <legend>Editer la categorie</legend>
    <form action="{{route('categorie.update',['client'=>$client->id])}}"method="post"><!--$client-->
    	@method('PATCH')
        @include('client.form')
    </form>
</fieldset>
@endsection