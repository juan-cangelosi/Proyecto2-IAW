<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marco;

class MarcoController extends Controller
{
     
    public function cargarMarco(Request $request){
        $marco = new Marco;
        $marco->tipo = $request->tipo;
        $marco->color = serialize($request->color);
        $marco->save();
    }
    
      
    public function modificarMarco(Request $request){
        $marco = Marco::find(request->id);
        $marco->tipo = $request->tipo;
        $marco->color = serialize($request->color);
        $marco->save();
    }
    
     public function eliminarMarco(Request $request){
        $marco = Marco::find(request->id);
        $marco->delete();
    }
    
     
    public function getMarco(){
        
    }
}
