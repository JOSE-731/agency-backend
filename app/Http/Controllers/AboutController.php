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

    public function create()
    {
        //
    }


    public function store(Request $request){

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request){

        $about = About::findOrFail($request->id);

    }

    public function destroy(Request $request){

        $about = About::deleted($request->id);
    
    }
}
