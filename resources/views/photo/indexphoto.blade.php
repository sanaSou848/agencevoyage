@extends('index')
@section('content')

<a href="{{route('photo.create')}}" class="btn btn-info">Add Local</a>
 <div class="title m-b-md">
    	@if(count($phots)>0)

        <table class="table bordered-table">
            <thead>
                <tr>
                    <th>Locals</th>
                 
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phots as $phot)
                <tr>
                    <td>
                        <a href="{{route('photo.show',['photo'=>$phot->id])}}"></a>
                    </td>
                    <td>
                       <img src ="{{asset('images/'.$phot->photo)}}"> 
                    </td>
                    




                    <td class="d-flex justify-content-end">
          <form action="{{route('photo.destroy',[$phot->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>   
                <a href="{{route('photo.edit',[$phot->id])}}" class="btn btn-info">Editer</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>             
    	@else
    		<h2 class="text-center py-4"> il n'y a pas de local</h2>
        @endif
    </div>
@endsection    
