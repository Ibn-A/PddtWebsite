<?php

namespace App\Http\Controllers;

use App\{Projet, Category, Comment};
use App\Http\Requests\Projet as ProjetRequest;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param String $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null)
    {
        $query = $slug ? Category::whereSlug($slug)->firstOrFail()->projets() : Projet::query();
        $projets = $query->withTrashed()->oldest('title')->paginate(5);
        return view('projets.index', compact('projets', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjetRequest $projetRequest)
    {
        Projet::create($projetRequest->all());

        return redirect()->route('projets.index')->with('info', 'Le projet a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        $comments = Comment::latest('created_at')->get();

        $category = $projet->category->name;    
        return view('projets.show', compact('projet', 'category', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjetRequest $projetRequest, Projet $projet)
    {
        $projet->update($projetRequest->all());
        
        return redirect()->route('projets.index')->with('info', 'Le projet a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        $projet->delete();

        return back()->with('info', 'Le projet a bien été supprimé dans la base de données.');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  Int $id
     * @return \Illuminate\Http\Response
     */
    public function forceDestroy($id)
    {
        Projet::withTrashed()->whereId($id)->firstOrFail()->forceDelete();

        return back()->with('info', 'Le projet a bien été supprimé définitivement dans la base de données.');
    }

    /**
     * Restore the specified resource.
     *
     * @param  Int $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Projet::withTrashed()->whereId($id)->firstOrFail()->restore();

        return back()->with('info', 'Le projet a bien été restauré.');
    }
}
