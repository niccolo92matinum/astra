<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function show($category)
    {
       
        $articoli = Article::where('category_id', $category)->get();

       
       return view('articlesCategory', compact('articoli'));
    }
}
