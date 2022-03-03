<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function index()
    {
        //dd(Article::withCount('monographs')->withCount('authors')->get());
        return view('articles.index', [
            'articles' => Article::withCount('monographs')->withCount('authors')->get(),
        ]);
    }
}
