@extends('index')
@section('content')
<fieldset>
	<legend>Nouvelle Place</legend>
	<form action="{{ route('place.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="place">Place</label>
			<input type="text" class="form-control" id="place" name="place">
			@error('palce')
			<p>{{$message}}</p>
			@enderror
		</div>

		<div class="form-group">
		    <label for="image">Image</label>
		    <input type="file" class="form-control" id="image" name="image">
		    @error('image')
		    <p class="text-danger">{{$message}}</p>
		    @enderror
		  </div>

		<input type="submit" class="btn btn-success" value="enregister">
		<input type="reset" class="btn btn-warning" value="annuler">
	</form>
</fieldset>
@endsection
