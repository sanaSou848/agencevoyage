@extends('index')
@section('content')

<a href="{{route('local.create')}}" class="btn btn-info">Add Local</a>
 <div class="title m-b-md">
    	@if(count($locals)>0)

        <table class="table bordered-table">
            <thead>
                <tr>
                    <th>Locals</th>
                 
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locals as $mesloc)
                <tr>
                    <td><a href="{{route('local.show',['local' => $mesloc->id])}}">{{$mesloc->	nom}}</a>
                    </td>
                    <td class="d-flex justify-content-end">
          <form action="{{route('local.destroy',[$mesloc->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>   
                <a href="{{route('local.edit',[$mesloc->id])}}" class="btn btn-info">Editer</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>             
    	@else
    		<h2 class="text-center py-4"> il n'y a pas de local</h2>
        @endif
    </div>
@endsection    
