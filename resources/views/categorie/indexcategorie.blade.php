
<a href="{{route('categorie.create')}}" class="btn btn-ifo">Add categorie</a>
 <div class="title m-b-md">
    	@if(count($categories)>0)
    	<ul class="list-group">
    		@foreach ($categories as $cat)
    		<li class="list-group-item">
    		<a href="{{route('categorie.show',['categorie' => $cat->id])}}">{{$cat->category}}</a>
    		</li>
    		@endforeach
    		<div class="py-3">
    			{{ $categories->links() }}
    		</div>
    	</ul>
    	@else
    		<h2 class="text-center py-4"> il n'y a pas de categorie</h2>
        @endif
    </div>
