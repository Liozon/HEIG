<?php

namespace App\Models;

use App\Lib\Message;
use Illuminate\Database\Eloquent\Model;
use Validator;


class Implication extends Model
{
    public static $rules = [
        'vehiculeNoChassis' => 'required|alpha_num|min:9',
        'sinistreReference' => ['required', 'regex:/[A-Z]{3}[0-9]+/'],
        'sinistreDate' => 'required|date'
    ];

    protected $table = 'implication';
    public $timestamps = false;
    protected $softDelete = false;

    public static function getValidation(Array $inputs)
    {
        //dd($inputs);
        $validator = Validator::make($inputs, Implication::$rules);
        /*if (!Vehicule::where('noChassis', $inputs['vehiculeNoChassis'])) {
            $validator->errors()->add('vehicule', Message::get('vehicule.pasDeChassis'));
        }*/
        $validator->after(function ($validator) use ($inputs) {
            if (!Vehicule::where('noChassis', $inputs['vehiculeNoChassis'])) {
                $validator->errors()->add('vehicule', Message::get('vehicule.pasDeChassis'));
            }
            if (Sinistre::find($inputs['sinistreReference'], $inputs['sinistreDate'])) {
                $validator->errors()->add('sinistre', Message::get('sinistre.missing'));
            }
            // J'ai lâché prise ici, c'était trop dur de se remettre dans le bain après tout ce temps...
        });
        return $validator;
    }

    public static function createOne(array $values)
    {
        $implication = new Implication();
        $implication->vehiculeNoChassis = $values['vehiculeNoChassis'];
        $implication->sinistreReference = $values['sinistreReference'];
        $implication->sinistreDate = $values['sinistreDate'];
        $implication->save();
    }
}