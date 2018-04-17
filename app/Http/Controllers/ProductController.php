<?php
/**
 * Created by PhpStorm.
 * User: cdutten
 * Date: 17/4/2018
 * Time: 00:05
 */

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the Products.
     *
     * @return Response
     */
    public function index()
    {
        $product = Nerd::all();

        // load the view and pass the Product
        return View::make('product.index')
            ->with('Product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // validate
        $rules = array(
            'name' => 'required|date',
            'price' => 'required',
            'description_thumbnail' => 'required',
            'description' => 'required'
        );
        $validator = Validator::make($request, $rules);

        $response = response()->json([$validator->errors()], 400);
        if (!$validator->fails()) {
            // store
            $product = new Product;
            $product->name = $request->get('name');
            $product->price = $request->get('price');
            $product->description_thumbnail = $request->get('description_thumbnail');
            $product->description = $request->get('description');
            if($product->save() && $request->hasFile('image')){
                $image = Image::make($request->file('image'));
                $extension = $request->image->extension();

                $image->resize(350, 250);
                $path = $request->image->store('images', $request->get('name'). "." . $extension);
                $product->image_url = $path;
                $response = response()->json([$product], 200);
            }
        }
        return $response;
    }
}