<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = ["cef", "nom", "prenom", "groupe_id"];

    public function groupe(){
        return this->belongsTo(Groupe::class,"groupe_id","stagiaire_id");
    }
}
