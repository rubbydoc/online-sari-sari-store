<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        return Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'stocks' => $request->stocks,
            'price' => $request->price,

        ]);
    }



    public function update(Request $request, $id)
    {
        return Product::find($id)->update([
            'name' => $request->name,
            'category' => $request->category,
            'stocks' => $request->stocks,
            'price' => $request->price,
            ]
        );
    }

    public function destroy(Product $product)
    {
        $product->delete();
    }

    public function show(Product $product)
    {
        return $product;
    }


}
