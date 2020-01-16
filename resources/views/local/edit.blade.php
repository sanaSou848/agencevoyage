@extends('index')
@section('content')
<fieldset>
    <legend>Editer la place</legend>
    <form action="{{route('local.update',['local'=>$local->id])}}"method="post">
    	@method('PATCH')
        @csrf
		<div class="form-group">
			<label for="nom">Nom</label>
			<input type="text" class="form-control" id="nom" name="nom" value="{{$local->nom}}">
		</div>
		<label for="nom">categories</label>
		<select name="cat">
			@foreach ($categories as $cat)
			<option value="{{$cat->id}}">{{$cat->category}}</option>
			@endforeach
		</select>
		<label for="nom">places</label>
		<select name="place">
			@foreach ($places as $mesplaces)
			<option value="{{$mesplaces->id}}">{{$mesplaces->place}}</option>
			@endforeach
		</select>

		<div class="form-group">
			<label for="nbretoile">nbretoile</label>
			<input type="text" class="form-control" id="nbretoile" name="nbretoile" value="{{$local->nbretoile}}">
		</div>
		<div class="form-group">
			<label for="capacite">capacite</label>
			<input type="text" class="form-control" id="capacite" name="capacite" value="{{$local->capacite}}">
		</div>
		<div class="form-group">
			<label for="description">description</label>
			<input type="text" class="form-control" id="description" name="description" value="{{$local->description}}">
		</div>


		<div class="form-group">
			<label for="description">prix</label>
			<input type="text" class="form-control" id="prix" name="prix" value="{{$local->prix}}">
		</div>

		<input type="submit" class="btn btn-success" value="enregister">
		<input type="reset" class="btn btn-warning" value="annuler">
    </form>
</fieldset>
@endsection