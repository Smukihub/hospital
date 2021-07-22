<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre', 'marca', 'modelo','noserie','noinventario','fechaini','fechafin','periodo','area','prioridad'];
}
