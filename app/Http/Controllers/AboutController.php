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

    public function indexv2(){

        $data = About::paginate(10);
        return view('About.index', compact('data'));
    }

    public function create(){

        return view('About.create');
    }

}
