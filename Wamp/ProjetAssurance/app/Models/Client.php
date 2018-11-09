<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Client extends Model
{
    /**
     * Définition des règles de validation pour un nouveau Client
     * @var array
     */
    public static $rules = [
        // obligatoire
        'nom' => 'required',
        // obligatoire
        'adresse' => 'required',
        // Un Client DOIT avoir un contrat. Le premier contrat doit donc être remplit.
        // obligatoire, valeur contenue dans la liste
        'contrat.0.type' => 'required|in:"RC","RC + Casco","RC ménage maison","RC ménage appartement"',
        // obligatoire, type date
        'contrat.0.dateDebut' => 'required|date',
        // obligatoire, type date et supérieur à l'attribut dateDebut du contrat
        'contrat.0.dateEcheance' => 'required|date|after:contrat.0.dateDebut',
        // Tous les autres contrats pour ce nouveau Client sont falcultatifs... mais tous obligatoires si au moins un autre champ est remplit
        // obligatoire (si autre champ présent), valeur contenue dans la liste
        'contrat.*.type' => 'required_with:contrat.*.dateDebut,contrat.*.dateEcheance|in:"RC","RC + Casco","RC ménage maison","RC ménage appartement"',
        // obligatoire (si autre champ présent), type date
        'contrat.*.dateDebut' => 'required_with:contrat.*.type,contrat.*.dateEcheance|date',
        // obligatoire (si autre champ présent), type date et supérieur à l'attribut dateDebut du contrat
        'contrat.*.dateEcheance' => 'required_with:contrat.*.dateDebut,contrat.*.type|date|after:contrat.*.dateDebut',
    ];

    protected $table = 'client';
    protected $primaryKey = 'numero';
    public $timestamps = false;

    /**
     * Valide les $inputs pour la création d'un nouveau Client
     * @param array $inputs
     * @return mixed
     */
    public static function getValidation(array $inputs)
    {
        // Création du validateur avec les inputs nettoyés et les règles
        $validator = Validator::make($inputs, self::$rules);

        // Ajout des contraintes supplémentaires ..?
        $validator->after(function ($validator) use ($inputs) {
            // Pas de contraintes d'existence !
            // Le client n'existe forcément pas, puisqu'on le créé.
            // Et il n'existe forcément aucun contrat déjà existant pour ce client, puisqu'il n'existe pas encore.
        });
        // Renvoi du validateur complet
        return $validator;
    }

    /**
     * Créer un nouveau Client avec les $values reçues.
     * Si une erreur survient lors de la création du client
     * ou de n'importe lequel de ses contrats,
     * l'exception devra être captée par store() de ClientCtrl
     * @param array $values
     */
    public static function createOne(array $values)
    {
        // Nouvelle instance de Client
        $client = new self();
        // On initialise les propriétés
        $client->nom = $values['nom'];
        $client->adresse = $values['adresse'];
        // On sauve le nouveau client
        $client->save();
        // L'ID automatique du nouveau client
        // est ajouté à la propriété numero de $client

        // Pour chaque contrat...
        foreach ($values['contrat'] as $contrat) {
            // ...on ajoute l'ID du nouveau client
            $contrat['clientNo'] = $client->numero;
            // On tente de créer le nouveau contrat
            Contrat::createOne($contrat);
        }
    }
}
