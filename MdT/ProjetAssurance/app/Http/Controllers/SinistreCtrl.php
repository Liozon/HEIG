<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sinistre;
use App\Lib\Message;

class SinistreCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sinistres = Sinistre::all();
        return view('sinistre/index')->with('sinistre',$sinistres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sinistre/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Message::warning('not_implemented');
        //return redirect()->back()->withInput();
        // On récupère seulement les inputs intéressants dans ce contexte
        $inputs = $request->only('reference','date','montant');

        // On demande au modèle Sinistre de valider les données contenues dans le tableau $inputs
        $validate = Sinistre::getValidation($inputs);

        //si la validation échoue
        if ($validate->fails()) {
            // On redirige l'utilisateur (redirect()) sur le formulaire (back())
            // avec les inputs tapés (withInput()) et les erreurs de validation (withErrors($validate))
            return redirect()->back()->withInput()->withErrors($validate);
        }

        // Si la validation passe...
        // On envoie un message de succès à la vue
        Message::success('valide');
        // On redirige l'utilisateur (redirect()) sur le formulaire (back())
        // avec les inputs tapés (withInput())
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
