<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=['id_emp','nom_emp','prenom_emp','email_emp','sexe_emp','tele_emp',
                         'sitFam_emp','cin_emp','dip_emp'];
}
