<x-layouts.app
title="Blog"
description="Benvenuti nel blog del sito"
>

@push('styles')
<style>
    
    .second-nav-main{
        margin-top: 95px;
        box-shadow: 5px 5px 5px var(--icon-second-color);
    }
    
    
    .second-nav{
        background-color: var(--icon-second-color);
        height: 5px; 
    }
    
    .second-nav-word a{
        color: white;
        font-size: 20px;
        text-decoration:none!important;
    }
    
    .second-nav-word a:hover{
        color:var(--main-color);
    }
    
    .container-sub{
        margin-top: 10%;
    }
    .icona{
        color:var(--icon-second-color);
    }
    
</style>
@endpush
<head>
    <div id="second-navbar" class="container-fluid second-nav-main fixed-top">
        <div class="row px-4 py-4 second-nav mt-2">
            <div class="col-12 ">
                
                <h5 class="second-nav-word"> <a href="{{route('home')}}">Home /</a> {{$name}} </h5>
            </div>
        </div>
    </div>
</head>
<body>
    
    <div class="container-fluid  container-sub  container2">
        <div class="row">
            <div class="col-12 pt-5">
                <div class="text-center ">
                    <p class="lead-normale">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque impedit, optio aliquam a adipisci praesentium aliquid ad sit atque provident? Quod minus repudiandae dolores maxime sit. Soluta praesentium eos tempora.</p>
                </div>
            </div>
        </div>
        <div class="text-center icona">
            <i class="fas fa-search-plus fa-5x"></i>
        </div>
        
        <div class="row card-home px-5 py-5">
            
            @foreach ($subcats as $subcat )
            
            <div class="col-12 col-md-3 col-sm-6 ">
                <div class="card-prod">
                    
                    <img src="{{Storage::url($subcat->img)}}" >
                    <div class="con-text">
                        <h2>{{$subcat->name}}</h2>
                        <a class="link-card" href="{{route('allArticles', $subcat)}}">  <button>See more</button></a>
                        
                    </div>
                </div> 
            </div>
            @endforeach                      
            
            
        </div>
    </div>
</body>

</x-layouts.app>