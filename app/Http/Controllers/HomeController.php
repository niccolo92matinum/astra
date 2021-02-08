<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showall()
    {
        
        $articles = Article::where('published', true)->get();
        
        return view('allArticles',compact('articles'));
    }

    public function article($id)
    {
        $article = Article::where('published', true)->where('id', $id)->first();
        if($article){
            return view('show', compact('article'));
        } else{
            return redirect('/');
        }
      
    }

    public function mailshow()
 {
   return view('mailpage');
 }
}
