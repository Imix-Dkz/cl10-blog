<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){ //Display a listing of the resource.
        $categories = Category::all();
        return view('adminv.categoriesv.index', compact('categories'));
    }
    public function create(){ //Show the form for creating a new resource.
        return view('adminv.categoriesv.create');
    }

    public function store(Request $request){ //Store a newly created resource in storage.
        return view('adminv.categoriesv.store');
    }

    public function show(Category $category){ //Display the specified resource.
        return view('adminv.categoriesv.show', compact('category'));
    }

    public function edit(Category $category){ //Show the form for editing the specified resource.
        return view('adminv.categoriesv.edit', compact('category'));
    }

    public function update(Request $request, Category $category){ //Update the specified resource in storage.
        return view('adminv.categoriesv.update');
    }

    public function destroy(Category $category){ //Remove the specified resource from storage.
        return view('adminv.categoriesv.destroy');
    }
}
