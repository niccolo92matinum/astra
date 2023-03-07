<?php

namespace App\Http\Controllers;



use App\Models\Article;
use App\Models\Category;
use App\Mail\MailContact;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Mastercategory;
use Laravel\Nova\Fields\Select;
use App\Http\Requests\MailRequest;
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
        $mastercategories = Mastercategory::all();
        
        return view('index',compact('mastercategories'));
    }
    
    public function showMaster($id)
    {
        $articles = Article::where('mastercategory_id', $id )->get(); 
        
        $array_vuoto = array();
        
        foreach ($articles as  $article) {
            $catId = $article->category;
            $array_vuoto[]= $catId;
        } 
        
        $categories = array_unique($array_vuoto);
        
        
        $array_numSub = array();
        
        foreach ($articles as  $article) {
            $subId = $article->subcategory;
            
            $array_numSub[]= $subId;
        } 
        
        $subcategory = array_unique($array_numSub);
        
        
        
        
        $nameMastercategories = Mastercategory::where('id', $id)->get();
        
        
        // qui prendo il nome da mettere sulla seconda navbar
        $array_vuoto1 = array();
        $array_vuoto3 = array();
        foreach ($nameMastercategories as  $nameMastercategory) {
            $name1 = $nameMastercategory->name;
            
            
            
            $mastercategoryId = $nameMastercategory->id;
            // anche questo
            //             $nameMaster = $nameMastercategory->name;
            
            
            
            
            $array_vuoto1[]= $name1;
            $array_vuoto3[]=  $mastercategoryId;
            
        }
        
        
        
        $array_vuoto2 = array();
        $array_vuoto4 = array();
        foreach ($articles as  $article) {
            $subId = $article->subcategory;
            
            $name = $article->category->name;
            // non posso usare name e lo cambio con name cate
            
            
            $id = $article->subcategory->id;
            $array_vuoto2[]= $subId;
            $array_vuoto4[]= $name;
            
        } 
        $subcats = array_unique($array_vuoto2);
        $numCat = count($categories);
        $numSub = count($subcategory);
        
        
        
        $sentence = Mastercategory::where('id', $mastercategoryId)->get('sentence')->first();
               
        $artSubs = Article::where('subcategory_id', $id)->get();
        
        $nameMaster = Mastercategory::where('id', $article['mastercategory_id'])->get('name')->first();
        $nameCate = Category::where('id', $article['category_id'])->get('name')->first();
        $nameSubcate = Subcategory::where('id', $article['subcategory_id'])->get('name')->first();
        //    dd( $nameMaster, $nameCate);
        
        $name2 = $article->subcategory->id;
        $name3 = $nameMastercategory->id; 
        
        if ($numCat == 1  &&  $numSub == 1){
            
            
            return view('allArticles', compact('artSubs','id','nameCate','nameMaster','nameSubcate', 'name3','name2',  'sentence'));
            // return redirect()->route('subCategory', ['category']);
            //    $x = reset($subcats);
            
            //    primo elemento
            
            // $id = $x['id'];
            
            
            // return view('allArticles', compact('artSubs','id','nameCate','nameMaster','nameSubcate', 'name3','name2'));
        }elseif($numCat == 1){
            return view ('subCategory', compact('subcats', 'name','name1', 'mastercategoryId',  'sentence'));
            
        }else 
        return view ('masterCategory', compact('categories', 'name1', 'sentence'));
        
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
        
        //   qui prendo l'id delle master category da mettre sulla nav
        
        $array_vuoto = array();
        foreach ($articles as  $article) {
            $mastercategoryId= $article->mastercategory_id;
            $array_vuoto[]= $mastercategoryId;
            
        } 
        // dd($mastercategoryId);
        // qui dall'id risalgo al nome 
        
        $nameMastercategorie = Mastercategory::where('id', $array_vuoto)->get();
        
        $array_vuoto = array();
        foreach ($nameMastercategorie as  $nameMastercategoria) {
            $name1= $nameMastercategoria->name;
            
            $array_vuoto[]= $name1;
        } 
        
        // numero subCategory uguae a 1 ??
        
        
        $array_sub[] = array();
        $i = 0;
        foreach ($articles as $article){
            
            $subCate = $article->subcategory_id;
            $array_sub[$i] = $subCate;
            $i++;
        }
        $x = array_unique($array_sub);
        $numSubCat = count($x);
        
        
        $artSubs = Article::where('subcategory_id', $array_sub[0])->get();
        $id = $article->subcategory_id;
        $nameMaster = Mastercategory::where('id', $article['mastercategory_id'])->get('name')->first();
        $nameCate = Category::where('id', $article['category_id'])->get('name')->first();
        $nameSubcate = Subcategory::where('id', $article['subcategory_id'])->get('name')->first();
        $name2 = $article->subcategory->id;
        $name3 = $nameMastercategoria->id; 
        
        
        
        if ($numSubCat == 1) {
            
            return view('allArticles', compact('artSubs','id','nameCate','nameMaster','nameSubcate', 'name3','name2'));
        }else{
            
            return view('subCategory', compact('subcats', 'name','name1', 'mastercategoryId'));
        }
        
    }
    
    
    public function showall( $id )
    { 
        
        $artSubs = Article::where('subcategory_id', $id)->get();
        
        // qui prendo il nome della subCategoria da mettre sulla seconda NavBar
        $nameSubCates = Subcategory::where('id', $id)->get();
        $array_vuoto1 = array();
        foreach ($nameSubCates as  $nameSubCate) {
            $name1 = $nameSubCate->id;
            
            $array_vuoto1[]= $name1;
        } 
        
        
        
        // qui prendo il nome della Categoria però  prima devo ricavarmi l'ID della categoria che 
        // ora ricordo mi serve per la rotta da mettre nella seconda nav
        $array_vuoto = array();
        foreach ($artSubs as  $artSub) {
            $c= $artSub->category_id;
            
            $array_vuoto[]= $c;
        } 
        
        
        
        
        // ricavarne il nome. Ci sarà sicuramente un metodo più corto ma n-daj-ca-fee
        $nameCategorie = Category::where('id', $c)->get();
        
        $array_vuoto = array();
        foreach ($nameCategorie as  $nameCategoria) {
            $name2= $nameCategoria->id;
            
            $array_vuoto[]= $name2;
        } 
        
        
        
        // ricavo il nome dalla masterCategory 
        $array_vuoto = array();
        foreach ($artSubs as  $artSub) {
            $mastercategoryId= $artSub->mastercategory_id;
            
            $array_vuoto[]= $mastercategoryId;
        } 
        
        
        
        // ricavarne il nome. Ci sarà sicuramente un metodo più corto ma n-daj-ca-fee
        $nameMasters = Mastercategory::where('id', $mastercategoryId)->get();
        
        $array_vuoto = array();
        foreach ($nameMasters as  $nameMaster) {
            $name3= $nameMaster->id;
            
            $array_vuoto[]= $name3;
        } 
        
        
        // Tutte le volte che nella subcategory c'è solo un articolo vogli andare direttamente alla show
        $arrArticle = Article::where('subcategory_id', $id)->get()->toArray();
        $numArtic = count($arrArticle);
        
        $article = Article::where('published', true)->where('subcategory_id', $id)->first();;
        $relating = Article::where('category_id',$article['category_id'])->get()->take(4);
        $relatedArticles = $relating->except($article->id);
        
        $nameCate = Category::where('id', $article['category_id'])->get('name')->first();
        $nameMaster = Mastercategory::where('id', $article['mastercategory_id'])->get('name')->first();
        $nameSubcate = Subcategory::where('id', $article['subcategory_id'])->get('name')->first();
        
        
        if($numArtic == 1 ){
            return view('show', compact('article', 'relatedArticles', 'nameCate','nameMaster','nameSubcate','name1','name2','name3'));
            
        } else{
            return view('allArticles', compact('artSubs','id','nameCate','nameMaster','nameSubcate', 'name3','name2'));
            
        }
    }
    
    
    
    public function article($id) {
        
        $article = Article::where('published', true)->where('id', $id)->first();
        // Prendo i nomi di categoria e subcategoria da mettere nella seconda navbar
        $nameMaster = Mastercategory::where('id', $article['mastercategory_id'])->get('name')->first();
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
        
        
        //    tutto per la master category da mettre sulla seconda nav
        
        $masterIds = Mastercategory::where('id', $article['mastercategory_id'])->get('id');
        
        $array_vuoto = array();
        foreach ($masterIds as  $masterId) {
            $name3= $masterId->id;
            
            $array_vuoto[]= $name3;
        } 
        
        
        $subcategoryIds = Subcategory::where('id', $article['subcategory_id'])->get('id');
        $array_vuoto = array();
        foreach ($subcategoryIds as  $subcategoryId) {
            $name1= $subcategoryId->id;
            
            $array_vuoto[]= $name1;
        } 
        
        
        
        
        
        
        if($article){
            return view('show', compact('article','nameCate','nameSubcate','relatedArticles','nameMaster','name2', 'name1','name3'));
        } else{
            return redirect('/');
        }
        
        
    }
    
    
    public function mailshow(){
        
        return view('mail.mailpage');
    }
    
    
    public function mailsend(MailRequest $request) {  
        
        
        // $a = new Mail();
        $messageee = $request->input('message');
        $name = $request->input('name');
        $email = $request->input('mail');
       
        
        $a = compact('name', 'email', 'messageee');
       

        $result = new Mail($a);
   
            
            Mail::send('mail.send',["name"=>$name,"messageee"=>$messageee, "email"=>$email] , function($message) 
            {
                $message->from('astradvb@astra.it');
                $message->to('ossido1999@libero.it');
            });
           
            
            return redirect('/')->with('status', "L'email è stata inviata con successo");
            
            
            
        }
        
        
        public function assistenza()
        {
            
            
            
            return view('assistenza');
        }
        
        public function schema()
        {
            
            return view('showSchema');
        }
        
        
    }
    