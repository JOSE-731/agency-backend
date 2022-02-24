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

    public function store(Request $request)
    {
        
        About::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
        ]);

        return back();
    }

    public function edit($id)
    {
        $edit = About::find($id);
        return view('About.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = About::find($id);
        $edit->titulo = $request->titulo;
        $edit->descripcion = $request->descripcion;
        $edit->fecha = $request->fecha;

        $edit->save();
   
       return view('index');
    }


    public function destroy(Request $request){

        $articulo = About::destroy($request->id);

        return back();
    }


}
