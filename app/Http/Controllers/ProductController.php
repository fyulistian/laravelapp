<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * 200: OK. The standard success code and default option.
     * 201: Object created. Useful for the store actions.
     * 204: No content. When an action was executed successfully, but there is no content to return.
     */

     /**
      * Payload
      * {
          "brand": "KING",
          "model": "QTMMT003K",
          "fuel": "BENSIN",
          "price": 1000000
        }
      */

    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function create(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function destroy(Request $request, $id)
    {
        Product::find($id)->delete();
        return response()->json(null, 204);
    }
    
}
