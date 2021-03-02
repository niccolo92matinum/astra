<?php

namespace App\Http\Controllers;



use App\Models\Article;
use App\Models\Category;
use App\Mail\MailContact;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Mastercategory;
use Laravel\Nova\Fields\Select;
use Illuminate\Support\Facades\Mail;




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
        $array_vuoto = array();
        foreach ($articles as  $article) {
            $subId = $article->subcategory;
            
            
            
            $array_vuoto[]= $subId;
        } 
        
        $subcats = array_unique($array_vuoto);
        
        
        $nameCategories = Category::where('id', $category)->get();
        // qui prendo il nome da mettere sulla seconda navbar
        $array_vuoto1 = array();
        foreach ($nameCategories as  $nameCategory) {
            $name = $nameCategory->name;
            
            $array_vuoto1[]= $name;
        } 
        
        
        
        return view('subCategory', compact('subcats', 'name'));
        
    }
    
    
    public function showall( $id)
    { 
        $artSubs = Article::where('subcategory_id', $id)->get();
        
        
        
        // qui prendo il nome della subCategoria da mettre sulla seconda NavBar
        $nameSubCategories = Subcategory::where('id', $id)->get();
        $array_vuoto1 = array();
        foreach ($nameSubCategories as  $nameSubCategory) {
            $name = $nameSubCategory->name;
            
            $array_vuoto1[]= $name;
        } 
        
        
        
        // qui prendo il nome della Categoria però  prima devo ricavarmi l'ID della categoria che 
        // ora ricordo mi serve per la rotta da mettre nella seconda nav
        $array_vuoto = array();
        foreach ($artSubs as  $artSub) {
            $categoryId= $artSub->category_id;
            
            $array_vuoto[]= $categoryId;
        } 

      

        // ricavarne il nome. Ci sarà sicuramente un metodo più corto ma n-daj-ca-fee
        $nameCategorie = Category::where('id', $categoryId)->get();
        
        $array_vuoto = array();
        foreach ($nameCategorie as  $nameCategoria) {
            $name2= $nameCategoria->name;
            
            $array_vuoto[]= $name2;
        } 
        
        return view('allArticles', compact('artSubs','id','name','name2','categoryId'));
    }
    
    
    
    
    public function article($id) {   
        $article = Article::where('published', true)->where('id', $id)->first();
        // Prendo i nomi di categoria e subcategoria da mettere nella seconda navbar
        $nameCate = Category::where('id', $article['category_id'])->get('name')->first();
        $nameSubcate = Subcategory::where('id', $article['subcategory_id'])->get('name')->first();
        
        // prendo gli articoli correlati  che sono della stessa categoria tranne quello mostrato nella show
        $relating = Article::where('category_id',$article['category_id'])->get()->take(4);
        $relatedArticles = $relating->except($article->id);
        
    //Qui ho preso l'id della categria per mettere nella seconda nav la rotta per le categorie
    // dato che serve l'ID della categoria
        $categoryIds = Category::where('id', $article['category_id'])->get('id');
        
        $array_vuoto = array();
        foreach ($categoryIds as  $categoryId) {
            $name2= $categoryId->id;
            
            $array_vuoto[]= $name2;
        } 


        $subcategoryIds = Subcategory::where('id', $article['subcategory_id'])->get('id');
        $array_vuoto = array();
        foreach ($subcategoryIds as  $subcategoryId) {
            $name1= $subcategoryId->id;
            
            $array_vuoto[]= $name1;
        } 
        
        
        if($article){
            return view('show', compact('article','nameCate','nameSubcate','relatedArticles','name2', 'name1'));
        } else{
            return redirect('/');
        }
        
        
    }
    
    public function mailshow(){
        
        return view('mail.mailpage');
    }


    public function mailsend(Request $request)
    {  
        $messageee = $request->input('message');
        $name = $request->input('name');
         $email = $request->input('mail');
        
    //     $data["name"] = $request->name;
    // $data["email"] = $request->mail;
    // $data["message"] = $request->message;
 

        Mail::send('mail.send',["name"=>$name,"messageee"=>$messageee] , function($message)
        {
           $message->from('astra@Sacco.it');
           $message->to('ossido1999@libero.it');
        });
        return redirect('home')->with('Bravo Hai inviato la mail');
    }
    
    
    public function assistenza()
    {


       
        return view('assistenza');
    }
    
    
}
