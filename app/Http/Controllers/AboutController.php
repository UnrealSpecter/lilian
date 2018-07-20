<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statement;

class AboutController extends Controller
{
    public function index(){
        $statement = Statement::all();
        return view('partials.about', compact('$statement', 'statement'));
    }
}
