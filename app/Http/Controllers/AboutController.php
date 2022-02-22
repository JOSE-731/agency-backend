<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        //Mostramos todos los datos
        $about = About::all();

        return $about;
    }

}
