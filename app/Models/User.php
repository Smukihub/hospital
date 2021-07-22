<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $fillable = ['nombre', 'apellidop', 'apellidom','usuario', 'nivel','email', 'password'];


}
