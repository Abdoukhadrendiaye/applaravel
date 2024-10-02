<?php

namespace App\Http\Controllers;

use App\Models\Voitures;
use Illuminate\Http\Request;

class VoituresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures=Voitures::all();
        return view('voiture.voiture',compact('voiture'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voiture.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marque'=> 'required',
            'model'=> 'required',
            'annee'=> 'required',
            'prix'=> 'required',
        ]);
        $voitures=new Voitures();
        $voitures->marque=$request->marque;
        $voitures->model=$request->model;
        $voitures->annee=$request->annee;
        $voitures->prix=$request->prix;
        $voitures->save();
        return redirect()->route('voiture.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voitures $voitures)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voitures $voitures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voitures $voitures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voitures $voitures)
    {
        //
    }
}
