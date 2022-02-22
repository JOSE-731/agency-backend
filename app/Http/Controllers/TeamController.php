<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        //Mostramos todos los datos
        $teams = Team::all();

        return $teams;
    }

}
