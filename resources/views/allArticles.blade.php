<x-layouts.app
title="Blog"
description="Benvenuti nel blog del sito"
>
@push('styles')
<style>
    
    
    
</style>
@endpush
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Category</title>
</head>

<nav >
    <div id="second-navbar"  class="container-fluid second-nav-main align-items-center fixed-top">
        <div class="row px-4 py-4 second-nav mt-2">
            <div class="col-12 ">
                
                @if ($nameMaster->name == $nameCate->name )
                <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home <i class="fas fa-chevron-right"></i></a>   {{$nameSubcate->name}}  </p>
                
                <p class="second-nav-word float-right "> <a href="javascript:history.back()" >Indietro</a> </p> 
                @else
                <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home <i class="fas fa-chevron-right"></i></a> <a href="{{route('masterCategory', $name3)}}">{{$nameMaster->name}} <i class="fas fa-chevron-right"></i></a>  <a href="{{route('subCategory',$name2)}}">{{$nameCate->name}} <i class="fas fa-chevron-right"></i></a>  {{$nameSubcate->name}}  </p>
                
                <p class="second-nav-word float-right "> <a href="javascript:history.back()" >Indietro</a> </p> 
                @endif
                
                
            </div>
        </div>
    </div>
    
</nav>

<body class="mobile-container">
    
    
    <div class="container-fluid  containerallArticles pl-5 pr-5">
        <div class="row">
            <div class="col-12 pt-5">
                <div class="text-center ">
                    <p class="lead-normale"></p>
                </div>
            </div>
        </div>
        <div class="text-center icona">
            <i class="fas fa-sort-amount-up fa-5x"></i>
        </div>
        
        <section class="row  card-home  ">
            
            @foreach ($artSubs as $artSub)
            <div class="col-12 col-md-3  col-sm-6 " class="mediaCard">
                <div class="card-prod">
                    
                    <img src="{{Storage::url($artSub->img)}}" >
                    <div class="con-text">
                        <h2>{{$artSub->title}}</h2>
                        <a class="link-card" href="{{route('show', $artSub)}} "><button>VAI</button></a>
                        
                    </div>
                </div>
                
            </div>
            
            
            @endforeach
            
        </section>
        
    </div>
</body>
</html> 

</x-layouts.app>