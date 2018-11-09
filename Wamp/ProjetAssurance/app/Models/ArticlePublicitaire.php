<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Validator;

class ArticlePublicitaire extends Model
{
    // Définition des règles de validation pour un nouvel article publicitaire
    // Les noms doivent correspondre aux colonnes de la table articulepublicitaire dans la base de données
    public static $rules = [
        'numero' => 'required|integer|min:1',
        'descriptif' => 'required',
        'prixUnitaire' => 'required|numeric|min:0',
        'disponibilite' => 'required|in:"Oui","Non"'
    ];

    // Paramétrages pour le dialogue avec la base de données.
    // Nous en parlerons peut-être plus en détail la prochaine fois...
    protected $table = 'articlepublicitaire';
    protected $primaryKey = 'numero';
    public $timestamps = false;

    /**
     * Méthode permettant de valider les inputs
     * @param Array $inputs
     * @return void|$this
     */
    public static function getValidation(Array $inputs)
    {
        // Création du validateur. On lui donne les $inputs reçus en paramètre et les $rules qui régissent la validation
        $validator = Validator::make($inputs, self::$rules);

        // On rajoute les conditions supplémentaires dans ce bloc de code
        // Le validateur va vérifier ces conditions même si les $inputs ne sont pas valides.
        $validator->after(function ($validator) use($inputs) {
            $articlePublicitaire = self::find($inputs['numero']);
            // Si l'article existe déjà, on ajoute une erreur aux erreurs du validateur.
            if ($articlePublicitaire !== null) {
                $validator->errors()->add('exists', Message::get('article.exists'));
            }
        });

        // On retourne la validateur pour quiconque souhaite valider les données.
        return $validator;
    }

    /**
     * Enregistre un nouvel ArticlePublicitaire selon les $values reçues
     * @param array $values An array containing the values to insert
     */
    public static function createOne(array $values)
    {
        // Nouvelle instance d'ArticlePublicitaire
        $obj = new self();
        // Définition des propriétés
        $obj->numero = $values['numero'];
        $obj->descriptif = $values['descriptif'];
        $obj->prixUnitaire = $values['prixUnitaire'];
        $obj->disponibilite = $values['disponibilite'];
        // Enregistrement de l'ArticlePublicitaire
        $obj->save();
    }
}
