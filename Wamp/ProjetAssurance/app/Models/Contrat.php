<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Contrat extends Model
{
    protected $table = 'contrat';
    public $timestamps = false;

    /**
     * Définition des règles de validation pour un nouveau Contrat
     * @var array
     */
    public static $rules = [
        'clientNo' => 'required|integer|min:0',
        'type' => 'required|in:"RC","RC + Casco","RC ménage maison","RC ménage appartement"',
        'dateDebut' => 'required|date',
        'dateEcheance' => 'required|date|after:dateDebut'
    ];

    /**
     * Valide les $inputs pour la création d'un nouveau Contrat
     * @param array $inputs
     * @return mixed
     */
    public static function getValidation(array $inputs)
    {
        // Création du validateur
        $validator = Validator::make($inputs, self::$rules);
        // Ajout des contraintes supplémentaires
        $validator->after(function ($validator) use ($inputs) {
            $client = Client::find($inputs['clientNo']);
            // Vérification de l'existence du Client
            if ($client == null) {
                $validator->errors()->add('client', Message::get('client.missing'));
            }
        });
        // Renvoi du validateur
        return $validator;
    }

    /**
     * Récupération d'un contrat depuis la BD correspondant au numero de dossier fourni pour le client fourni
     * @param Client $client
     * @param $dossierNo
     * @return mixed
     */
    public static function find($client, $dossierNo)
    {
        $res = null;
        if ($client !== null) {
            $res = self::where([
                'dossierNo' => $dossierNo,
                'clientNo' => $client->numero
            ])->first();
        }
        return $res;
    }

    /**
     * Création d'un Contrat avec les $values reçues
     * @param array $values
     */
    public static function createOne(array $values)
    {
        // Création de l'instance
        $contrat = new self();
        // Définition des propriétés
        $contrat->clientNo = $values['clientNo'];
        $contrat->type = $values['type'];
        $contrat->dateDebut = $values['dateDebut'];
        $contrat->dateEcheance = $values['dateEcheance'];
        $contrat->dossierNo = self::generateNumber($values['clientNo']);
        // Enregistrement de l'instance
        $contrat->save();
    }

    /**
     * Renvoi la prochaine valeur disponible pour l'identifiant d'un nouveau contrat
     * pour le client désigné par $clientNo
     * @param $clientNo
     * @return mixed
     */
    protected static function generateNumber($clientNo)
    {
        // On récupère le plus grand dossierNo de Contrat existant pour le clientNo donné
        $number = self::where('clientNo', $clientNo)->max('dossierNo');

        // Si number est null : pas de contrat existant pour ce client, on retourne 1 (null + 1 = 1)
        // Si number est un nombre, c'est le dossierNo du dernier contrat pour ce client. On l'incrémente et on le retourne.
        return $number + 1;
    }
}
