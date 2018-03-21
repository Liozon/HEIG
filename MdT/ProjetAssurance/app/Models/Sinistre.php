<?php

namespace App\Models;


use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Sinistre extends Model
{
    protected $table = 'sinistre';
    public $timestamps = false;
    public static $rules = [
        'reference' => ['required', 'regex:/[A-Z]{3}[0-9]+/'],
        'date' => 'required|date',
        'montant' => 'required|numeric|min:0'
    ];

    // Paramétrages pour le dialogue avec la base de données.
    // Nous en parlerons peut-être plus en détail la prochaine fois...


    public static function getValidation(Array $inputs)
    {
        // Création du validateur. On lui donne les $inputs reçus en paramètre et les $rules qui régissent la validation
        $validator = Validator::make($inputs, self::$rules);

        // On rajoute les conditions supplémentaires dans ce bloc de code
        // Le validateur va vérifier ces conditions même si les $inputs ne sont pas valides.
        $validator->after(function ($validator) use ($inputs) {
            $sinistres = self::where('reference', $inputs['reference'])->where('date', $inputs['date']);
            // Si le sinistre existe déjà, on ajoute une erreur aux erreurs du validateur.
            if ($sinistres !== null) {
                $validator->errors()->add('exists', Message::get('sinistre.exists'));
            }
        });

        // On retourne la validateur pour quiconque souhaite valider les données.
        return $validator;
    }

}


