<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;

class AnnonceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::sortable()->paginate(5);



        return view('Annonces.Index', compact('annonces'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Annonces.Create');
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
            'ref_annonce' => 'required|unique:annonces,ref_annonce',
            'prix' => 'required',
            'surface' => 'required',
            'nb_piece' => 'required'
        ]);

        Annonce::create($request->all());
        return redirect()->route('annonces.index')->with('success', 'Félicitation ! votre annonce a été ajouté');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        return view('Annonces.Show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        return view('Annonces.Edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
    //    dd($annonce);
        $request->validate([
            'ref_annonce' => 'required',
            'prix' => 'required',
            'surface' => 'required',
            'nb_piece' => 'required'
        ]);
        $annonce->update($request->all());
        return redirect()->route('annonces.index')
        ->with('success', 'Annonce mise en ligne');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Annonce suprimmé avec succès');
    }
}