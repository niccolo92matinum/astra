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
    
</style>

@endpush
<head>
    <div id="second-navbar" class="container-fluid second-nav-main align-items-center fixed-top">
        <div class="row px-4 py-4 second-nav mt-2">
            <div class="col-12 ">
                
                <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home / </a>  <a href="{{route('masterCategory',$name3)}}"> {{$nameMaster->name}} /</a>  <a href="{{route('subCategory',$name2)}}">{{$nameCate->name}} /</a>  <a href="{{route('allArticles',$name1)}}"> {{$nameSubcate->name}} /</a> {{$article->title}} </p>
                
                <p class="second-nav-word  d-inline-block float-right "> <a href="javascript:history.back()" >Indietro</a> </p>
            </div>
        </div>
    </div>
</head>

<body class="">
    <div class="container-fluid containerShow px-5 py-5 gray ">
    
    
    
        <div class="row py-5">
            
            <center class="col-12 col-md-6  ">
                <img class="img-show my-5 " src="{{Storage::url($article->img)}}"  >
            </center>
            <div class="col-12 col-md-6  ">
                <div class="title-show text-left  pl-5 pt-5">
                    <h1  class="">{{$article->title}}</h1>
                    <hr class="sottolinea ">
                    
                </div>
                <div class="text-left pl-5 ppp ">
                    <h1>{!!$article->description!!}</h1>
                </div>
            </div>
        </div>
        
        <div class="row py-5">
            
            
            <div class="col-12  pl-5 pr-5">
                <div class="title-show text-center ppp">
                    
                    <h1>Descrizione<i class="fas fa-wrench "></i></h1>
                    <hr class="sottolinea2">
                </div>
                <div class="text-center  ppp">
                    <p>{!!$article->property!!}</p>
                    
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






</x-layouts.app>