<x-layouts.app
title="{{$article->title}}"
description="{{$article->getPreview()}}">

@push('styles')
<style>
    .containerShow {
        margin-top:150px;    
    }
    
    .img-show{
        width: 400px;
        height: 400px;
    }
    
    
    @media screen and (max-width: 1000px) {
        .img-show {
            width: 300px;
            height: 300px;
        }
    }
    
    @media screen and (max-width: 500px) {
        .img-show {
            width: 200px;
            height: 200px;
        }
        .second-nav-word a, .second-nav-word{
            
            font-size: 10px;
        }
        
        .descr-show,.title-show{
            width: 100%
            
        }
    }
    
    .img-show{
        border-color:#b0b0b0;
        border-style: solid;
        border-width: 2px;
        border-radius: 20px; 
    }
    
    .tab{
        width: 80%;
    }
    
    .title-show{
        font-size: 50px;
        font-weight: 700;
        color:var(--main-color);
        padding-bottom: 30px;
        text-shadow: 2px 2px var(--icon-second-color);
        
        
    }
    
    .ppp{
        color: var(--main-color);
    }
    
    .gray{
        background-color: var(--background-color);
        margin-top: 150px;
    }
    
    .sottolinea{
        text-decoration: underline  solid  ;
        width: 250px;
        float:left;
        background-color: black;
    }
    
    .sottolinea2{
        text-decoration: underline  solid  ;
        background-color: black;
        width: 200px;
        align-items: center;
    }
    
    .modal-img {
        height:100%;
    }
    
    .show-mobile h1{
      font-size:25px;
    }
    .sottolinea, .icona-mobile{
       display: none;
    }

    .show-mobile {
      width: 100%;
      
     
    }

    
 .media-library{
   font-size:10px;
   word-break:break-all;
   margin-left:0;
 }

 
</style>

@endpush

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show product page</title>
</head>

<nav >
    <div id="second-navbar" class="container-fluid second-nav-main align-items-center fixed-top">
        <div class="row px-4 py-4 second-nav mt-2">
            <div class="col-12 ">
                
                @if ($nameMaster->name == $nameCate->name )
                
                <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home <i class="fas fa-chevron-right"></i> </a>  <a href="{{route('allArticles',$name1)}}"> {{$nameSubcate->name}} <i class="fas fa-chevron-right"></i></a> {{$article->title}} </p>
                
                <p class="second-nav-word  d-inline-block float-right indietro "> <a href="javascript:history.back()" >Indietro</a> </p>  
                @else
                
                <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home <i class="fas fa-chevron-right"></i></a>  <a href="{{route('masterCategory',$name3)}}"> {{$nameMaster->name}} <i class="fas fa-chevron-right"></i></a>  <a href="{{route('subCategory',$name2)}}">{{$nameCate->name}} <i class="fas fa-chevron-right"></i></a>  <a href="{{route('allArticles',$name1)}}"> {{$nameSubcate->name}} <i class="fas fa-chevron-right"></i></a> {{$article->title}} </p>
                
                <p class="second-nav-word  d-inline-block float-right indietro "> <a href="javascript:history.back()" >Indietro</a> </p>  
                @endif
                
            </div>
        </div>
    </div>
</nav>

<body  class="mobile-container">
    <div class=" container-fluid gray   ">
        
        
        
        <div class="row pt-4 pb-0  ">
            
            <div class="col-12 col-md-6 text-center ">
                <img class="img-show my-5 " src="{{Storage::url($article->img)}}"  >
            </div>
            <div class="col-12 col-md-6 show-mobile ">
                <div class="title-show text-left  pl-5 pt-5">
                    <h1  class="">{{$article->title}}</h1>
                    <hr class="sottolinea ">
                    
                </div>
                <div class="text-left pl-5  ppp show-mobile">
                    <div class="media-library" >{!!$article->description!!}</div>
                    
                    <!-- Trigger the modal with a button -->
                    
                    
                    <!-- Button trigger modal -->
                    
                    @if (empty($article->getFirstMediaUrl("gallery", "thumb")))
                    
                    @else()
                    
                    <button type="button" class="btn btn-outline btn-nico mt-4" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>
                    @endif
                    
                    
                    @if (empty($article->getFirstMediaPath("pdf")))
                    
                    @else
                    <button type="button" class="btn btn-outline btn-nico mt-4" ><a class="link-card" href="{{route('download', $article)}}"> Scarica il pdf</a></button> 
                    
                    @endif
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable  modal-lg  ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body    ">
                                    
                                    <img src="{{$article->getFirstMediaUrl("gallery", "thumb") }} " alt="" class="img-fluid modal-img" >
                                    @if (empty($article->getMedia("gallery")[1]))
                                    
                                    @else
                                    <img src="{{$article->getMedia("gallery")[1]->getUrl("thumb") }} " alt="" class="img-fluid modal-img" >
                                    @endif
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                </div>
            </div>
            
            <div class="container">
                <div class="row py-3">
                
                
                    <div class="col-12 pt-3 pl-5 pr-5">
                        <div class="title-show text-center ppp">
                            
                            <h1>Descrizione<i class="fas fa-comment-medical pl-3 pt-5 icona-mobile"></i></h1>
                            <hr class="sottolinea2">
                        </div>
                        <div class="text-center  ppp">
                            <p>{!!$article->property!!}</p>
                            
                            
                        </div>
                    </div>
                    
                    
                </div>
                
                
            </div>
            
            
        </div>
        
        
        <hr class="hrr">
        <div class="container-fluid back-gray pt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class=" main-scritte" >Articoli correlati </h2>
                </div>
                
            </div>
            
            <div class="row card-home">
                @foreach ($relatedArticles as $relatedArticle)
                <div class="col-12 col-md-3  col-sm-6 " class="mediaCard">
                    <div class="card-prod">
                        
                        <img src="{{Storage::url($relatedArticle->img)}}" >
                        <div class="con-text">
                            <h2>{{$relatedArticle->title}}</h2>
                            <a class="link-card" href="{{route('show', $relatedArticle)}}"><button>VAI</button></a>
                            
                        </div>
                    </div>  
                </div>
                @endforeach
                
            </div>
        </div>
    </body>
    
    </html>
    
    
</x-layouts.app>