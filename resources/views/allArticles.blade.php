<x-layouts.app
title="Blog"
description="Benvenuti nel blog del sito"
>
@push('styles')
<style>



</style>
@endpush
<head>
    <div id="second-navbar" class="container-fluid second-nav-main align-items-center fixed-top">
        <div class="row px-4 py-4 second-nav mt-2">
            <div class="col-12 ">
               
                    <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home /</a><a href="{{route('subCategory', $categoryId)}}">{{$name2}}</a> / {{$name}}  </p>
                    
                     <p class="second-nav-word float-right "> <a href="javascript:history.back()" >Indietro</a> </p>
            </div>
        </div>
    </div>
    
</head>

<body>
    

<div class="container-fluid  containerallArticles pl-5 pr-5">
    <div class="row">
        <div class="col-12 pt-5">
            <div class="text-center ">
                <p class="lead-normale">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque impedit, optio aliquam a adipisci praesentium aliquid ad sit atque provident? Quod minus repudiandae dolores maxime sit. Soluta praesentium eos tempora.</p>
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
                        <a class="link-card" href="{{route('show', $artSub)}}"><button>VAI</button></a>
                       
                    </div>
                </div>
                
            </div>
            
            
            @endforeach
            
        </section>

    </div>
</body>
    
    @push('scripts')
    <script>
        
        </script>
    @endpush
</x-layouts.app>