<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view ('/categories/categories', compact('categories'));
    }

    public function display_category_create_page()
    {
        return view ('/categories/createCategory');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->description = $request->input('description');
        $category->difficulty_level = $request->input('difficulty_level');
        $category->save();
        
        return redirect()->route('categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('/categories/editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->description = $request->input('description');
        $category->difficulty_level = $request->input('difficulty_level');
        $category->save();

        return redirect()->route('categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories');
    }
}
