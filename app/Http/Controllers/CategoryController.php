<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        return Category::create([
            'name' => $request->name,
            'description' => $request->description,


        ]);
    }

    public function update(Request $request, $id)
    {
        return Category::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }

    public function show(Category $category)
    {
        return $category;
    }
}
