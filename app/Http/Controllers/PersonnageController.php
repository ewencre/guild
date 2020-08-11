<?php

namespace App\Http\Controllers;

use App\Personnage;
use App\Race;
use App\Classe;
use App\Armure;
use Illuminate\Http\Request;

class PersonnageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personnages.index', [
            'personnages' => Personnage::orderBy('created_at', 'asc')->get(),
            'races' => Race::all(),
            'classes' => Classe::all(),
            'armures' => Armure::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnages.create', [
            'races' => Race::all(),
            'classes' => Classe::all(),
            'armures' => Armure::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|max:25',
            'pdv' => 'required',
            'proprietaire' => 'required|max:25',
        ]);

        $personnage = new Personnage;
        $personnage->pseudo = $request->pseudo;
        $personnage->pdv = $request->pdv;
        $personnage->race_id = $request->race_id;
        $personnage->classe_id = $request->classe_id;
        $personnage->armure_id = $request->armure_id;
        $personnage->proprietaire = $request->proprietaire;
        $personnage->save();

        return redirect()->route('personnages.index')
            ->with('success','Personnage créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function show(Personnage $personnage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnage $personnage)
    {
        return view('personnages.edit', [
            'personnage' => $personnage,
            'races' => Race::all(),
            'classes' => Classe::all(),
            'armures' => Armure::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnage $personnage)
    {
        $request->validate([
            'pseudo' => 'required|max:25',
            'pdv' => 'required',
            'proprietaire' => 'required|max:25',
        ]);

        $personnage->pseudo = $request->pseudo;
        $personnage->pdv = $request->pdv;
        $personnage->race_id = $request->race_id;
        $personnage->classe_id = $request->classe_id;
        $personnage->armure_id = $request->armure_id;
        $personnage->proprietaire = $request->proprietaire;
        $personnage->save();

        return redirect()->route('personnages.index')
            ->with('success','Personnage modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnage $personnage)
    {
        $personnage->delete();

        return redirect()->route('personnages.index');
    }
}
