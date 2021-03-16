<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function dataArticles()
    {
        $articles = Article::all();

        $data = json_encode($articles, JSON_PRETTY_PRINT);
        $data1 = json_decode($data, true);

        $vuoto = array();
        foreach ($data1 as $pippo => $value) {
            
            $findNaCat =  Category::where('id', $value['category_id'])->get('name');
            $category = $findNaCat->first()->name;
            $value['category_id'] = $category;

            $findNaSubCat =  Subcategory::where('id', $value['subcategory_id'])->get('name');
            $subcategory = $findNaSubCat->first()->name;
            $value['subcategory_id'] = $subcategory;


         
                $vuoto[] = $value;            
        }

        
        return response()->json($vuoto);
        
    }

public function search()
{
    return view('searchPage');
}
// funzione che ci permette di ricercare i prodotti tramite parole chiave

public function searchform(Request $request)
{
  $q = $request->input('q');
  $articles = Article::search($q)->get();
  

  return view('resultSearching', compact('q', 'articles'));
}
   
}
