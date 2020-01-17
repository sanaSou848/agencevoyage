@extends('index')
@section('content')

<a href="{{route('offre.create')}}" class="btn btn-info">Add Local</a>
 <div class="title m-b-md">
    	@if(count($offres)>0)

        <table class="table bordered-table">
            <thead>
                <tr>
                    <th>Locals</th>
                 
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offres as $off)
                <tr>
                    <td>
                        <a href="{{route('offre.show',['photo'=>$off->id])}}"></a>
                    </td>
                    <td>
                       
                    </td>
                    




                    <td class="d-flex justify-content-end">
          <form action="{{route('offre.destroy',[$off->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>   
                <a href="{{route('offre.edit',[$off->id])}}" class="btn btn-info">Editer</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>             
    	@else
    		<h2 class="text-center py-4"> il n'y a pas de local</h2>
        @endif
    </div>
@endsection    
