<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortafolioController extends Controller
{
    public function index()
    {
        //Mostramos todos los datos
        $portafolio = Portafolio::all();

        return $portafolio;
    }

    public function indexv2(){

        $data = Portafolio::paginate(10);
        return view('Portafolio.index', compact('data'));
    }

    public function create(){

        return view('Portafolio.create');
    }

    public function store(Request $request)
    {
        
      $portafolio = Portafolio::create([
            'titulo' => $request->titulo,
            'categoria' => $request->categoria
        ] + $request->all());

        if($request->hasFile('imagen')){
            $datosCursos['imagen']=$request->file('imagen')->store('uploads','public');
            $portafolio->save();
        }

        return back();
    }

    public function edit($id)
    {
        $edit = Portafolio::find($id);
        return view('Portafolio.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = Portafolio::find($id);
        $edit->titulo = $request->titulo;
        $edit->categoria = $request->categoria;
      

        if($request->hasFile('imagen')){
            //Eliminar la imagen
            Storage::disk('public')->delete($edit->imagen);
            $edit['imagen']=$request->file('imagen')->store('uploads','public');
            $edit->save();
        }
   
       return view('index');
    }


    public function destroy(Request $request){

        $articulo = Portafolio::destroy($request->id);

        return back();
    }

}
