<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('partials.news', compact('$news', 'news'));
    }

    public function show($id){
        $news = News::find($id);
        return view('partials.news-single', compact('$news', 'news'));
    }
}
