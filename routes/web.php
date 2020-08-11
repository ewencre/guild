<?php

use Illuminate\Support\Facades\Route;

use App\Personnage;
use App\Race;
use App\Classe;
use App\Armure;
use Illuminate\Http\Request;

Route::resource('personnages','PersonnageController');

/*Route::get('/', function () {
    return view('personnages', [
        'personnages' => Personnage::orderBy('created_at', 'asc')->get(),
        'races' => Race::all(),
        'classes' => Classe::all(),
        'armures' => Armure::all(),
    ]);
});

Route::get('/creation', function () {
    return view('creation', [
        'races' => Race::all(),
        'classes' => Classe::all(),
        'armures' => Armure::all(),
    ]);
});

Route::post('/personnage', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'pseudo' => 'required|max:25',
        'proprietaire' => 'required|max:25',
    ]);

    if ($validator->fails()) {
        return redirect('/creation')
            ->withInput()
            ->withErrors($validator);
    }

    $personnage = new Personnage;
    $personnage->pseudo = $request->pseudo;
    $personnage->race_id = $request->race_id;
    $personnage->classe_id = $request->classe_id;
    $personnage->armure_id = $request->armure_id;
    $personnage->proprietaire = $request->proprietaire;
    $personnage->save();

    return redirect('/');
});

Route::delete('/personnage/{id}', function ($id) {
    Personnage::findOrFail($id)->delete();

    return redirect('/');
});*/