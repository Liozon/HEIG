<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    //
    protected $table = 'contrat';
    public $timestamps = false;

    public static $rules = [
        //    'dossierNo' => ['required', 'numeric', 'min:0'],
        'clientNo' => ['required', 'integer', 'min:0'],
        'type' => ['required'],
        'dateDebut' => ['required','date'],
        'dateEcheance' =>  ['required','date'],
        //    'articleNo' => ['required', 'integer', 'min:0'],
    ];
}
