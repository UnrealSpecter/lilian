<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writing;

class WritingController extends Controller
{
    public function index(){
        $writings = Writing::all();
        return view('partials.writing', compact('$writings', 'writings'));
    }
}
