<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;

class AnnonceController extends Controller
{

    /**
     * Resource @index
     * return a listing of resource annonces
     */
    public function index()
    {
        $annonces = Annonce::sortable()->paginate(5);
        return view('Annonces.Index', compact('annonces'));
    }

    /**
     * Show the form for creating a new annonce.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Annonces.Create');
    }

    /**
     * Store a newly annonce created resource in storage.
     * with required and unique validation on form
     *
     * @param  \Illuminate\Http\Request  $request
     * @return success with redirection on index resource
     */
    public function store(Request $request)
    {

        //$request validate input only if required and unique inputs are valid
        $request->validate([
            'ref_annonce' => 'required|unique:annonces,ref_annonce',
            'prix' => 'required',
            'surface' => 'required',
            'nb_piece' => 'required'
        ]);

        //Annonce model created with all data from request
        Annonce::create($request->all());

        //Return redirection to @index resource with succes if it's valid
        return redirect()->route('annonces.index')->with('success', 'Félicitation ! votre annonce a été ajouté');
    }

    /**
     * Display the specified resource annonce.
     *
     * @param  Annonce $annonce
     * @return view show who's compacted data's from annonce
     */
    public function show(Annonce $annonce)
    {
        return view('Annonces.Show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Annonce $annonce
     * @return view Edit who's compacted data's from annonce
     */
    public function edit(Annonce $annonce)
    {
        return view('Annonces.Edit', compact('annonce'));
    }

    /**
     * Update the specified resource annonce in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Annonce $annonce
     * @return redirection to @index resource with success if inputs are valid
     */
    public function update(Request $request, Annonce $annonce)
    {

        //$request validate input only if required and unique inputs are valid
        $request->validate([
            'ref_annonce' => 'required|unique:annonces,ref_annonce',
            'prix' => 'required',
            'surface' => 'required',
            'nb_piece' => 'required'
        ]);

        //Annonce model updated with all data from request
        $annonce->update($request->all());

        //Return redirection to @index resource with succes if it's valid
        return redirect()->route('annonces.index')
            ->with('success', 'Votre annonce a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Annonce $annonce
     * @return redirection to @index resource with success if $annonce is delete
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Annonce suprimmé avec succès');
    }
}
