<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CvCategory;
use App\CvEntry;

class CVController extends Controller
{
    public function index(){
        $categories = CVCategory::with('entries')->get();
        return view('partials.cv', compact('$categories', 'categories'));
    }
}
