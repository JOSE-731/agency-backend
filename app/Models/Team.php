<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'imagen', 'profesion_perfil', 'facebook', 'twitter', 'linkedin'];

}
