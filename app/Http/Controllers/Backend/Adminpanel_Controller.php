<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use app\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
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
        $productos = Product::all();
        $usuarios = User::all();
        return view('admin.panelprincipal',
                    ['Products' => $productos,
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

    public function cargar (Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:50|unique:Products',
            'thumbnail_description' => 'required|max:50',
            'description' => 'required|min:10',
            'price' => 'required',
        ]);

        $datos = $request->all();
        $file = $request->file('imagen');

        if ( $file == null) {
         $imgdflt= 1;
        } else {
         $imgdflt= 0;
         $extension = $request->file('imagen')->getClientOriginalExtension();
         $img = Image::make($file);
         $img->resize(350, 250);
         $img->save( public_path( 'image/'. $datos['nombre'] . '.' . $extension ));
        }

        if ($imgdflt == 1) {
            $imagenDir= "image/default.jpg";
        } else {
            $imagenDir = 'image/'. $datos['nombre'] . "." . $extension;
        }

         Product::create([
            'name' => $datos['name'],
            'thumbnail_description' => $datos['thumbnail_description'],
            'description' => $datos['description'],
            'price' => $datos['price'],
            'image_url' => $imagenDir,
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
        $producto = Product::find($datos['id']);
        $producto->delete();
        return redirect()->to('admin');
    }




}
