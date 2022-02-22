<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
        //Mostramos todos los datos
        $portafolio = Portafolio::all();

        return $portafolio;
    }

}
