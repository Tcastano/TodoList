<?php

namespace App\Http\Controllers;

use App\Models\tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function listado_de_tareas(){
        $tareas = tarea::all();
        return view('lista', ["todas_las_tareas" => $tareas]);
    }
    public function nuevaTarea(Request $req){
        $tarea = new tarea();
        $tarea->nombre = $req->input('nombre');
        $tarea->save();

        $tareas = tarea::all();
        return view('lista', ["todas_las_tareas" => $tareas]);
    }
    
    public function completarTarea($id) {
        $tarea = tarea::find($id);
        $tarea->delete();
        return redirect()->route('listarTareas');
    }
}
