<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('projets.addCat');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'unique:categories',
        ]);

        $cat = new Category;
        $cat->name = $request->name;
        $cat->slug = $request->name;
        $cat->save();
        return redirect()->route('projets.create')->with('info', 'La catégorie a bien été créé');
    }
}
