<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Potion;

class HomeController extends Controller
{
    public function loadHome(){
        return view('home')->with('ingredients', Ingredient::all())->with('potions', Potion::all());
    }
}
