<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Sinistre extends Model
{
    /**
     * Définition des règles de validation pour un nouveau Sinistre
     * @var array
     */
    public static $rules = [
        'reference' => ['required', 'regex:/[A-Z]{3}[0-9]+/'],
        'date' => 'required|date',
        'montant' => 'required|numeric|min:0'
    ];

    protected $table = 'sinistre';
    public $timestamps = false;
    protected $softDelete = false;
    /**
     * Indique que la clé primaire de Sinistre n'est pas numérique ni à incrémenter
     * @var bool
     */
    public $incrementing = false;

    /**
     * Valide les $inputs pour la création d'un nouveau Sinistre
     * @param Array $inputs The inputs to validate
     * @return \Illuminate\Validation\Validator
     */
    public static function getValidation(Array $inputs)
    {
        // Création du validateur
        $validator = Validator::make($inputs, self::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            $sinistre = self::find($inputs['reference'], $inputs['date']);
            // Vérification de la non-existence du Sinistre
            if ($sinistre !== null) {
                $validator->errors()->add('exists', Message::get('sinistre.exists'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }

    /**
     * Récupère l'objet en base de données dont l'id correspond à la $reference et la $date passés en paramètres.
     * Si aucun enregistrement ne possède cet id, la méthode retourne null
     * @param $reference
     * @param $date
     * @return null|Sinistre
     */
    public static function find($reference, $date)
    {
        // Sinistre a une clé composée, donc find() ne peut être utilisé
        return self::where('reference', $reference)->where('date', $date)->first();
    }
}
