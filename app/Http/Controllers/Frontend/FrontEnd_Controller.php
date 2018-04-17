<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
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
        $productos = Product::all()->where('dst', '1');
        return view('front_end.inicio',['Products' => $productos]);
    }
 
    public function productos(){
        $productos = Product::paginate(15);
        return view('front_end.Products',['Products' => $productos]);
    }

    public function productoX($pID){
        
        $productos = Product::all()->where('id', $pID);
        return view('front_end.producto',['Products' => $productos]);;
        
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
        $productosEncontrados = Product::select()
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
