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
    
</style>

@endpush
<head>
    <div id="second-navbar" class="container-fluid second-nav-main align-items-center fixed-top">
        <div class="row px-4 py-4 second-nav mt-2">
            <div class="col-12 ">
                
                <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home / </a>  <a href="{{route('subCategory',$name2)}}">{{$nameCate->name}} /</a>  <a href="{{route('allArticles',$name1)}}"> {{$nameSubcate->name}} /</a> {{$article->title}} </p>
                {{-- {{$nameCate->name}}{{route('home')}} --}}
                <p class="second-nav-word  d-inline-block float-right "> <a href="javascript:history.back()" >Indietro</a> </p>
            </div>
        </div>
    </div>
</head>




<div class="container-fluid containerShow px-5 py-5 ">
    
    
    
    <div class="row py-5">
        
        <center class="col-12 col-md-6  ">
            <img class="img-show my-5 " src="{{Storage::url($article->img)}}"  >
        </center>
        <div class="col-12 col-md-6  ">
            <div class="title-show text-center">
                <h1 >{{$article->title}}</h1>
                
            </div>
            <div class="descr-show pt-3">
                <p>{!!$article->description!!}</p>
            </div>
        </div>
    </div>
    <div class="row py-5">
        
        
        <div class="col-12  pl-5 pr-5">
            <div class="title-show text-center">
                
                <h2>Caratteristiche Tecniche <i class="fas fa-wrench "></i></h2>
            </div>
            <table class="text-center ">
                <p>{!!$article->property!!}</p>
            </table>
        </div>
        
        
    </div>
    
    
</div>


<hr>
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


</x-layouts.app>