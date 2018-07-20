<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visual;

class VisualController extends Controller
{
    public function index(){
        $visuals = Visual::all();
        return view('partials.visual', compact('$visuals', 'visuals'));
    }
}
