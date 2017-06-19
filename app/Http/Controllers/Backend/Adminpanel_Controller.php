<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use app\Http\Requests;
use App\Http\Controllers\Controller;
use App\productos;
use App\User;
use Image;

class Adminpanel_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bienvenida()
    {
        return view('admin.panelBienvenida');
    }
 /*
    |--------------------------------------------------------------------------
    | Panel Principal VIEW
    |--------------------------------------------------------------------------
    |
    | Este controlador es el resposable de mostrar el 
    | Panel principal y pasar los datos a la vista.
    |
    */
    public function index()
    {
        $productos = productos::all();
        $usuarios = User::all();
        return view('admin.panelprincipal',
                    ['productos' => $productos,
                     'usuarios' => $usuarios
                    ]);
    }

/*
    |--------------------------------------------------------------------------
    | Validacion y Carga de Productos
    |--------------------------------------------------------------------------
    |
    | Cargar el Producto en la base de datos
    | 
    | 
    */

    public function cargar(Request $request )
    {

        $this->validate($request, [
            'nombre' => 'required|max:50|unique:productos',
            'descripcionBreve' => 'required|max:50',
            'descripcion' => 'required|min:10',
            'precio' => 'required',
        ]);

        $datos = request()->all();
        $file = $request->file('imagen'); 

        
        if( $file == null)
        {
         $imgdflt= 1;
        }
        else
        {
         $imgdflt= 0;
         $extension = $request->file('imagen')->getClientOriginalExtension();
         $img = Image::make($file);
         $img->resize(350, 250);
         $img->save( public_path( 'imagen/'. $datos['nombre'] . '.' . $extension ));
        }
        
        if ($imgdflt == 1) 
        {
            $imagenDir= "imagen/default.jpg";
        }
        else 
        {
            $imagenDir = 'imagen/'. $datos['nombre'] . "." . $extension;
        }

         productos::create([
            'nombre' => $datos['nombre'],
            'descripcionBreve' => $datos['descripcionBreve'],
            'descripcion' => $datos['descripcion'],
            'precio' => $datos['precio'],
            'imagenDir' => $imagenDir,
            'dst' => $datos['dst'],
          ]);

        return redirect()->to('admin');
    }
/*
    |--------------------------------------------------------------------------
    | Eliminar Productos
    |--------------------------------------------------------------------------
    |
    | Elminar el Producto de la base de datos
    | 
    */

    public function borrar()
    {
        $datos = request()->all();
       
        // QUERY 
        $producto = productos::find($datos['id']);
        $producto->delete();
        return redirect()->to('admin');
    }

    
    

}