<?php

namespace App\Http\Controllers;



use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;




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
        $categories = Category::all();
        

        $articles = Article::where('published', true)->get();
        
        return view('home',compact('articles','categories'));
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
