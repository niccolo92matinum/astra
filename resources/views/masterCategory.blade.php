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
    <title>Mastercategories Page</title>
</head>


<nav>
    <div  id="second-navbar" class="container-fluid second-nav-main align-items-center fixed-top">
        <div class="row px-4 py-4 second-nav mt-2">
            <div class="col-12 ">
                
                <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home <i class="fas fa-chevron-right"></i></a> {{$name1}} </p>
                <p class="second-nav-word float-right "> <a href="javascript:history.back()">Indietro</a> </p>
                
            </div>
        </div>
    </div>
</nav>


<body>
    
    <div class="container-fluid  container-sub  ">
        <div class="row">
            <div class="col-12 pt-5">
                <div class="text-center icona pt-5">
                    <i class="fas fa-info fa-5x"></i>
                </div>
                <div class="text-center ">
                    <p class="lead-normale">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque impedit, optio aliquam a adipisci praesentium aliquid ad sit atque provident? Quod minus repudiandae dolores maxime sit. Soluta praesentium eos tempora.</p>
                </div>
            </div>
        </div>
      
        
        <div class="row card-home px-5 ">
            
            @foreach ($categories as $category )
            
            <div class="col-12 col-md-3 col-sm-6 ">
                <div class="card-prod">
                    
                    <img src="{{Storage::url($category->img)}}" >
                    <div class="con-text">
                        <h3>{{$category->name}}</h3>
                        <a class="link-card" href="{{route('subCategory', $category)}}">  <button>Vai</button></a>
                        
                    </div>
                </div> 
            </div>
            {{-- @dump($category); --}}
            @endforeach                      
            
        </div>
    </div>
</body>
</html>
</x-layouts.app>