<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class DownloadController extends Controller
{
    public function download($id)
    {    
        $article = Article::where('published', true)->where('id', $id)->first();

        
        $pathToFile = $article->getFirstMediaPath("pdf");
       
       
        return response()->download($pathToFile);
    }
}
