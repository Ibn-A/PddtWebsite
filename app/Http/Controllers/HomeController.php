<?php

namespace App\Http\Controllers;

use App\{Projet, Category, Comment};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug = null)
    {
        $query = $slug ? Category::whereSlug($slug)->firstOrFail()->projets() : Projet::query();
        $projets = $query->withTrashed()->oldest('title')->paginate(5);
        return view('projets.index', compact('projets', 'slug'));
    }
}
