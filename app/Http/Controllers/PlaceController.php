<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $places = Place::all();
        return view('place.indexplace',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            if($request->has('image'))
        {
            $url = time().'-'.$request->image->getClientOriginalName();
            $destination = 'images';
            $request->image->move($destination,$url);
        }
        $place = Place::create([
            'place'=>$request->place,
            'photo'=>$url
        ]);   
       return redirect()->route('place.index')->with('message','place ajouté avec succés');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('place.edit')->with('place',$place);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {

        if($request->has('image'))
        {
            $url = time().'-'.$request->image->getClientOriginalName();
            $destination = 'images';
            $request->image->move($destination,$url);
            $place->update([
            'place'=>$request->place,
            'photo'=>$url]);
        return redirect()->route('place.index', $place)->with('successNewplace', 'place modifié avec succés');
        }

        else
        {
           $place->update([
            'place'=>$request->place]);
            return redirect()->route('place.index', $place)->with('successNewplace', 'place modifié avec succés'); 
        }



        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //

        $place->delete();
        return redirect()->route('place.index')->with('successDelete','Place supprmier avec succés');
    }
    




    
}
