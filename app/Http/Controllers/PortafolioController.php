<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

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
        
        $portafolio = new Portafolio();
      /*$portafolio = Portafolio::create([
            'titulo' => $request->titulo,
            'categoria' => $request->categoria
        ] + $request->all());

        if($request->hasFile('imagen')){
            $datosCursos['imagen']=$request->file('imagen')->store('uploads','public');
            $portafolio->save();
        }*/

       // $datosPortafolio=request()->all();
        $datosPortafolio=request()->except('_token');

        //Guardar la imagen

        if($request->hasFile('imagen')){
            //Obtenemos la imagen
            $imagenName=$request->file('imagen');

            //Especificamos la tuta donde queremos que se almacene la imagen
            $destination = 'imagen/featured/';
            //Guardamos la imagen con su nombre original
            $filename = $imagenName->getClientOriginalName();
            $upload = $request->file('imagen')->move($destination, $filename);

            $portafolio->imagen = $destination . $filename;
        }

        $portafolio->titulo = $request->titulo;
        $portafolio->categoria = $request->categoria;

        $portafolio->save();
     
        //Guardamos en la bd los valores que treamoes por request
     

        return back();
    }

    public function edit($id)
    {
        $edit = Portafolio::find($id);
        return view('Portafolio.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
       $updateData = Portafolio::find($id);
       $updateData->titulo = $request->titulo;
       $updateData->categoria = $request->categoria;
      
       if($request->hasFile('imagen')){
        $imagenName=$request->file('imagen');

        //especificamos la tuta donde queremos que se almacene la imagen
        $destination = 'imagen/featured/';
        $filename = $imagenName->getClientOriginalName();
        $upload = $request->file('imagen')->move($destination, $filename);
        $updateData->imagen = $destination . $filename;
    }

        $updateData->save();
   
       return view('index');
    }


    public function destroy($id){

        //Eliminamos todo el registro
        $data = Portafolio::find($id);
        $data->delete();
       

        return back();
    }

}
