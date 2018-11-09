<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client/index')->with('client', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Récupération des inputs pertinents
        $inputs = $request->only('nom', 'adresse', 'contrat');
        // Nettoyage des inputs vides.
        // La méthode PHP array_filter supprime d'un tableau
        // toutes les entrées ayant une valeur "fausse"
        foreach ($inputs['contrat'] as $key => $contrat) {
            $inputs['contrat'][$key] = array_filter($contrat);
        }
        $inputs['contrat'] = array_filter($inputs['contrat']);
        
        // Récupération du validateur de Client
        $validate = Client::getValidation($inputs);
        // En cas d'échec du validateur, on redirige avec les erreurs et les inputs
        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // Début de la transaction si la validation passe
        DB::beginTransaction();
        try {
            // On tente de créer le nouveau Client (et son(ses) nouveau(x) contrat(s))
            Client::createOne($inputs);
            // Si tout va bien, on "valide" la création
            DB::commit();
            // On envoie un message de succès et on redirige vers la liste des clients
            Message::success('client.saved');
            return redirect('client');
        } catch (\Exception $e) {
            // Si une erreur survient, on "annule" la création
            DB::rollback();
            // On envoie un message d'erreur et on redirige ver le formulaire, avec les inputs
            Message::error('bd.error', ['error' => $e->getMessage()]);
            return redirect()->back()->withInput();
        }
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
