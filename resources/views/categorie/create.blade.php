@extends('index')
@section('content')
<fieldset>
	<legend>Nouvelle Categorie</legend>
	<form action="{{ route('categorie.store') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="categorie">Categorie</label>
			<input type="text" class="form-control" id="categorie" name="category">
			@error('category')
			<p>{{$message}}</p>
			@enderror
		</div>
		<input type="submit" class="btn btn-success" value="enregister">
		<input type="reset" class="btn btn-warning" value="annuler">
	</form>
</fieldset>
@endsection
