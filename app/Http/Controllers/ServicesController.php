<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        //Mostramos todos los datos
        $services = Services::all();

        return $services;
    }
}
