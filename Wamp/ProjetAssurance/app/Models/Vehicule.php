<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $table = 'vehicule';
    protected $primaryKey = 'noChassis';
    public $timestamps = false;
    protected $softDelete = false;
}
