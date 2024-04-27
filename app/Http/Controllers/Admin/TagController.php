<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index() { //Display a listing of the resource.
        $tags = Tag::all();
        return view('adminv.tagsv.index', compact('tags'));
    }

    public function create() { //Show the form for creating a new resource.
        //Se añade un arreglo de colores que será mandado a la vista
        $colors = [ 
            'red'   =>'Color Rojo',
            'green' =>'Color Verde',
            'blue'  =>'Color Azul',
            'yellow'=>'Color Amarillo',
            'pink'  =>'Color Rosado',
            'gray'  =>'Color Gris',
            'purple'=>'Color Morado',
            'LightGreen'=>'Color Verde Claro',
            'Aqua' =>'Color Azul Claro',
            'Peru' =>'Color Café'
        ];

        return view('adminv.tagsv.create', compact('colors'));
    }

    public function store(Request $request) { //Store a newly created resource in storage.
        //return $request->all();
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'color'=> 'required'
        ]);
        $tag = Tag::create($request->all());
        return redirect()->route('admin.tags.index')->with('info', 'Nueva Tag \''.$tag->name.'\' creada exitosamente.');
    }

    public function show(Tag $tag) { //Display the specified resource.
        return view('adminv.tagsv.show', compact('tag'));
    }

    public function edit(Tag $tag) { //Show the form for editing the specified resource.
        //Se añade un arreglo de colores que será mandado a la vista
        $colors = [ 
            'red'   =>'Color Rojo',
            'green' =>'Color Verde',
            'blue'  =>'Color Azul',
            'yellow'=>'Color Amarillo',
            'pink'  =>'Color Rosado',
            'gray'  =>'Color Gris',
            'purple'=>'Color Morado',
            'LightGreen'=>'Color Verde Claro',
            'Aqua' =>'Color Azul Claro',
            'Peru' =>'Color Café'
        ];

        return view('adminv.tagsv.edit', compact('tag', 'colors'));
    }

    public function update(Request $request, Tag $tag) { //Update the specified resource in storage.
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color'=> 'required'
        ]);
        $tag->update($request->all());
        return redirect()->route('admin.tags.edit', $tag)->with('info', 'Tag \''.$tag->name.'\' actualizada exitosamente.');
    }

    public function destroy(Tag $tag) { //Remove the specified resource from storage.
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('info', 'Tag \''.$tag->name.'\' eliminada');
    }
}
