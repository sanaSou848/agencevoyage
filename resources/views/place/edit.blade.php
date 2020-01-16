@extends('index')
@section('content')
<fieldset>
    <legend>Editer la place</legend>
    <form action="{{route('place.update',['place'=>$place->id])}}"method="post" enctype="multipart/form-data">
    	@method('PATCH')
        @csrf
		<div class="form-group">
			<label for="place">Place</label>
			<input type="text" class="form-control" id="place" name="place" value="{{$place->place}}">
		</div>

		<div class="form-group">
		    <label for="image">Image</label>
		    <input type="file" class="form-control" id="image" name="image">

		    <img src ="{{asset('images/'.$place->photo)}}">


		  </div>
		<input type="submit" class="btn btn-success" value="enregister">
		<input type="reset" class="btn btn-warning" value="annuler">
    </form>
</fieldset>
@endsection