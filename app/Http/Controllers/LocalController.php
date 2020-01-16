<?php

namespace App\Http\Controllers;

use App\Local;
use App\Place;
use App\Categorie;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locals = Local::all();
        return view('local.indexlocal',compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $places = Place::all();
        return  view('local.create',compact('categories','places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $local = Local::create(['nom'=>$request->nom,
            'nbretoile'=>$request->nbretoile,
            'capacite'=>$request->capacite,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'categorie_id'=>$request->cat,
            'place_id'=>$request->place,
        ]);
       //dd($categorie);
       return redirect()->route('local.index')->with('message','local ajouté avec succés'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        //
        $categories = Categorie::all();
        $places = Place::all();
        return view('local.edit',compact('local','categories','places'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
        //
        $local->update(['nbretoile'=>$request->nbretoile,
                        'nom'=>$request->nom,
                        'capacite'=>$request->capacite,
                        'description'=>$request->description,
                        'categorie_id'=>$request->cat,
                        'place_id'=>$request->place,
                        'prix'=>$request->prix,
                        ]);
        
        return redirect()->route('local.index')->with('successNewLocal', 'local modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        //
    }
}
