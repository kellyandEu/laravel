<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class proyController extends Controller
{
/*
public function index(){
    return view('crear');
}

public function crear(){
    return view('crear');
}

public function editar(){
    return view('editar');
}

public function mostrar(){
    return view('mostrar');
}

public function formulario(Request $request){
    return $request->input('Nombre');
}
*/

public function index()
    {
        //pagina de inicio 
        $datos = Proyecto::orderBy('nombre', 'desc')->paginate(3);
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        //el formulario donde 
        //nosotros agregamos datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $proy = new Proyecto();
        $proy ->nombre = $request->post('nombre');
        $proy ->fondos = $request->post('fondos');
        $proy ->montoplan = $request->post('montoplan');
        $proy ->montopat = $request->post('montopat');
        $proy ->montofp = $request->post('montofp');
        
        $proy ->save();

        return redirect()->route("proyecto.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $proy = Proyecto::find($id);
        return view("eliminar" , compact('proyecto'));
    }

    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario
        
        $proy = Proyecto::find($id);
        return view("actualizar" , compact('proyecto'));
        
    }


    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la bd
        $proy = Proyecto::find($id);
        $proy ->nombre = $request->post('nombre');
        $proy ->fondos = $request->post('fondos');
        $proy ->montoplan = $request->post('montoplan');
        $proy ->montopat = $request->post('montopat');
        $proy ->montofp = $request->post('montofp');
        $proy ->save();

        
    
        return redirect()->route("proyecto.index")->with("success", "Actualizado con exito!");
        
    }

    public function destroy($id)
    {
        $proy = Proyecto::find($id);
        $proy->delete();
        return redirect()->route("proyecto.index")->with("success", "Eliminado con exito!");
    }


}
