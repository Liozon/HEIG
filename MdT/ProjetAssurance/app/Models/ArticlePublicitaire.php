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
        $validator->after(function ($validator) use ($inputs) {
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
     * Vérifie qu'il existe une entrée en base de données pour l'$id fourni.
     * @param $numero
     * @return bool
     */
    public static function exists($numero)
    {
        // Vu qu'ArticlePublicitaire a une clé simple, on peut utiliser find() pour en récupérer un.
        return ArticlePublicitaire::where('numero', $numero)->first() !== null;
    }

    /**
     * Enregistre en base de données un nouveau Sinistre selon les $values donnés
     * @param array $values
     */
    public static function createNew(array $values) {
        // Création d'une nouvelle instance de l'article
        $new = new ArticlePublicitaire();
        // Définition des propriétés de l'article
        $new->numero = $values['numero'];
        $new->descriptif = $values['descriptif'];
        $new->prixUnitaire = $values['prixUnitaire'];
        $new->disponibilite = $values['disponibilite'];
        // Enregistrement de l'article
        $new->save();
    }

}
