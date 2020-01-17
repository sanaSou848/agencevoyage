@extends('index')
@section('content')
<fieldset>
	<legend>Nouvelle Offres</legend>
	<form action="{{ route('offre.store') }}" method="post">
		@csrf
		<label for="Local">Local</label>
		<select name="cat">
			@foreach ($Locals as $Loc)
			<option value="{{$Loc->id}}">{{$Loc->nom}}</option>
			@endforeach
		</select>
		<div class="form-group">
			<label for="prix">Prix</label>
			<input type="text" class="form-control" id="prix" name="prix">
		</div>
		<div class="form-group">
		    <label for="des">Description</label>
		    <textarea class="form-control" name="des" id="des" cols="30" rows="7" placeholder="votre description"></textarea>
		</div>
		<div class="form-group">
			<label for="nombre">nombre</label>
			<input type="number" class="form-control" id="nombre" name="nombre">
		</div>
		<div class="form-group">
			<label for="description">description</label>
			<input type="text" class="form-control" id="description" name="description">
		</div>


		<div class="form-group">
			<label for="description">prix</label>
			<input type="text" class="form-control" id="prix" name="prix">
		</div>

		<input type="submit" class="btn btn-success" value="enregister">
		<input type="reset" class="btn btn-warning" value="annuler">
	</form>
</fieldset>
@endsection
