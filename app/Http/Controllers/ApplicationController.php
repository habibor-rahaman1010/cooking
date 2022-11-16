<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function homePage(){
        return view('home');
    }

    public function ourRecipe(){
        return view('ourRecipe');
    }

    public function ourChef(){
        return view('ourChef');
    }

    public function about(){
        return view('about');
    }
}
