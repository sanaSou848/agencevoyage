@extends('index')
@section('content')
@if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('message') }}
        </div>
@endif
<div class="title m-b-md">
    	<ul class="list-group">
    		
    		<li class="list-group-item">
    			Categorie : {{$categorie->category}} 
    		</li>
    	</ul>
    	  </div>

   @endsection          