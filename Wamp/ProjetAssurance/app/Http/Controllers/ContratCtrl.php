<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contrat;
use App\Lib\Message;

class ContratCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Affichage de l'index
        $contrats = Contrat::all();
        return view('Contrat/index')->with('contrat', $contrats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Affichage de la page create
        return view('Contrat/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mémorisation
        $inputs = $request->only('clientNo', 'type', 'dateDebut', 'dateEcheance');
        // validation du contrat
        $validate = Contrat::getValidation($inputs);
        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        try {
            Contrat::createOne($validate->getData());
            Message::success('contrat.saved');
            return redirect('contrat');
        } catch (\Exception $e) {
            Message::error('bd.error', ['error' => $e->getMessage()]);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
