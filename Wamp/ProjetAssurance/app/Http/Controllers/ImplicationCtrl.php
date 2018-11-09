<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Implication;

class ImplicationCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Affichage
        $implication = Implication::all();
        return view('implication/index', ['implication' => $implication]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('implication/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only('vehiculeNoChassis', 'sinistreReference', 'sinistreDate');

        $validate = Implication::getValidation($inputs);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }
        $inputs = $validate->getData();
        try {
            Implication::createOne($inputs);
            Message::success('implication.saved');
            return redirect('implication');
        } catch (\Exception $e) {
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
