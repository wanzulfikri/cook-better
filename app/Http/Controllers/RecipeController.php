<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    //
    function index(Recipe $recipes)
    {
        dd($recipes);
        return true;
    }
}
