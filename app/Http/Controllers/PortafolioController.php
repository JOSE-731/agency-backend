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
            $datosEmpleados['imagen']=$request->file('imagen')->store('uploads','public');
        }

     
        //Guardamos en la bd los valores que treamoes por request
        Portafolio::insert($datosPortafolio);
     

        return back();
    }

    public function edit($id)
    {
        $edit = Portafolio::find($id);
        return view('Portafolio.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
       
        //$edit->titulo = $request->titulo;
        //$edit->categoria = $request->categoria;
      

        if($request->hasFile('imagen')){
            $edit = Portafolio::find($id);
            //Eliminar la imagen
            Storage::delete('public/'.$edit->imagen);
           // Storage::disk('public')->delete($edit->imagen);
            $dataUpdate['imagen']=$request->file('imagen')->store('uploads','public');
            
        }
        Portafolio::where('id', '=', $id)->update($dataUpdate);
        $edit= Portafolio::find($id);

        
      /*  if($request->hasFile('foto')){
            $empleado = Empleados::find($id);
            Storage::delete('public/'.$empleado->foto);
            $datosEmpleados['foto']=$request->file('foto')->store('uploads', 'public');
        }
        Empleados::where('id', '=', $id)->update($datosEmpleados);
        $empleado= Empleados::find($id);
        return view('empleados.edit', compact('empleado'));*/
   
       return view('index', compact('edit'));
    }


    public function destroy($id){

        //Eliminamos todo el registro
        $data = Portafolio::find($id);
        dd( $data->imagen);
       

        return;
    }

}
