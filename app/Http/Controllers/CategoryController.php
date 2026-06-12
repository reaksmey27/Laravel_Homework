<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // raw sql
        // $categories = DB::select('SELECT * FROM categories');
        // Query Builder
        // $categories = DB::table('categories')->get();
        // Eloquent ORM:
        $categories = Category::orderBy('id', 'desc')->get();
        // dd($categories);
        return view('categories.list', compact('categories'));
    }

    public function create()
    {
        // dd(112);
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'dec'  => ['required', 'string'],
        ]);

        Category::create($validated);
        // return view('categories.list'); don't like this
        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'dec'  => ['required', 'string'],
        ]);

        $category = Category::findOrFail($id);
        $category->update($validated);

        return redirect('/categories');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/categories');
    }
}
