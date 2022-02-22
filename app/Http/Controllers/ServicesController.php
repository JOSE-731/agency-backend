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

    public function indexv2(){

        $data = Services::paginate(10);
        return view('Services.index', compact('data'));
    }

}
