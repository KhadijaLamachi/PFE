<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Formateur extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    use HasFactory;

    protected $fillable = ["codeF", "nom", "prenom", "cin", "email", "password", "date_embauche"];
}
