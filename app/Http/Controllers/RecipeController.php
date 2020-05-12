<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    //
    function index()
    {
        return view('recipe.index', ['recipes' => Recipe::all()]);
    }

    function create()
    {
        return view('recipe.create');
    }
}
