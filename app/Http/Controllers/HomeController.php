<?php

namespace App\Http\Controllers;



use App\Models\Article;
use App\Models\Category;
use App\Models\Subcategory;
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
    
     
        
        return view('home',compact('categories'));
    }


    public function showsubcategory($category)
    {   
        $articles = Article::where('category_id', $category )->get(); 

       
        $nameCategories = Category::where('id', $category)->get();

        $array_vuoto1 = array();
        foreach ($nameCategories as  $nameCategory) {
            $name = $nameCategory->name;
             
            $array_vuoto1[]= $name;
        } 
       


       $array_vuoto = array();
        foreach ($articles as  $article) {
            $subId = $article->subcategory;

           
            
             $array_vuoto[]= $subId;
            } 
          
             $subcats = array_unique($array_vuoto);

            return view('subCategory', compact('subcats','name'));
            
        }

// id della subcategory
    public function showall( $id)
    { 
        $artSubs = Article::where('subcategory_id', $id)->get();
   
      
        // dd($artSubs);
        
        return view('allArticles', compact('artSubs','id'));
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

    public function mailshow(){

   return view('mail.mailpage');
 }


public function assistenza()
{
    return view('assistenza');
}


}
