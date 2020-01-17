@extends('index')
@section('content')
<fieldset>
	<legend>Nouvelle Local</legend>
	<form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="nom">places</label>
			<select name="local">
				@foreach ($locals as $meslocals)
				<option value="{{$meslocals->id}}">{{$meslocals->nom}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<input id="image" type="file" name="image[]" multiple>
		</div>
		<input type="submit" class="btn btn-success" value="enregister">
		<input type="reset" class="btn btn-warning" value="annuler">
	</form>
</fieldset>
@endsection