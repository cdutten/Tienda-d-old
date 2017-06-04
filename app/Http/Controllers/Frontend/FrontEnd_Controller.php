<?php

namespace App\Http\Controllers\Frontend;

use App\productos;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Builder;


class FrontEnd_Controller extends Controller
{
    //

    public function index(){
        $productos = productos::all()->where('dst', '1');
        return view('front_end.inicio',['productos' => $productos]);
    }
 
    public function productos(){
        $productos = productos::paginate(15);
        return view('front_end.productos',['productos' => $productos]);
    }

    public function productoX($pID){
        
        $productos = productos::all()->where('id', $pID);
        return view('front_end.producto',['productos' => $productos]);;
        
    }

    public function buscar(){
        
        /* si el argumento search está vacío regresar a la página anterior */
        if (empty(Input::get('buscar'))) return redirect()->back();
        
        $buscar = urlencode(e(Input::get('buscar')));
        $route = "inicio/buscar/$buscar";
        return redirect($route); 
    }


    public function search($buscar){
        $buscar = urldecode($buscar);
        $productosEncontrados = productos::select()
                ->where('nombre', 'LIKE', '%'.$buscar.'%')
                ->orderBy('id', 'desc')
                ->get();
        
        if (count($productosEncontrados) == 0){
            return View('front_end.inc.buscar')
            ->with('message', 'No hay resultados que mostrar')
            ->with('buscar', $buscar);
        } else{
            return View('front_end.inc.buscar')
            ->with('producto', $productosEncontrados)
            ->with('buscar', $buscar);
        }
    }
}
