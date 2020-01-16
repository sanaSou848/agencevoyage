@extends('index')
@section('content')

<a href="{{route('categorie.create')}}" class="btn btn-info">Add categorie</a>
 <div class="title m-b-md">
    	@if(count($categories)>0)

        <table class="table bordered-table">
            <thead>
                <tr>
                    <th>Categories</th>
                 
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                <tr>
                    <td><a href="{{route('categorie.show',['categorie' => $cat->id])}}">{{$cat->category}}</a></td>
                    <td class="d-flex justify-content-end">
                        <form action="{{route('categorie.destroy',[$cat->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
                    
                    <a href="" class="btn btn-info">Editer</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="py-3">
                {{ $categories->links() }}
            </div>             
    	@else
    		<h2 class="text-center py-4"> il n'y a pas de categorie</h2>
        @endif
    </div>
@endsection    
