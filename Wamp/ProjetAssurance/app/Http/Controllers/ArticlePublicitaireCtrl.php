<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ArticlePublicitaire;
use App\Lib\Message;

class ArticlePublicitaireCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = ArticlePublicitaire::all();
        return view('articlepublicitaire/index')->with('articlepublicitaire', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articlepublicitaire/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // On récupère seulement les inputs intéressants dans ce contexte
        $inputs = $request->only('numero', 'descriptif', 'prixUnitaire', 'disponibilite');

        // On demande au modèle ArticlePublicitare, de valider les données contenues dans le tableau $inputs
        $validate = ArticlePublicitaire::getValidation($inputs);

        // Si la validation échoue
        if ($validate->fails()) {
            // On redirige l'utilisateur (redirect()) sur le formulaire (back())
            // avec les inputs tapés (withInput()) et les erreurs de validation (withErrors($validate))
            return redirect()->back()->withInput()->withErrors($validate);
        }
        // En cas de succès de la validation
        try {
            // Tentative d'enregistrement de l'article
            ArticlePublicitaire::createOne($inputs);
            // Message de succès, puis redirection vers la liste des articles
            Message::success('article.saved');
            return redirect('articlepublicitaire');
        } catch (\Exception $e) {
            // En cas d'erreur, envoi d'un message d'erreur
            Message::error('bd.error');
            // Redirection vers le formulaire, avec inputs
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
