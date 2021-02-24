<x-layouts.app
title="Blog"
description="Benvenuti nel blog del sito"
>

@push('style')
    <style></style>
@endpush
<h1>ciaoooooo</h1>
<head>
    <div class="row">
        <div class="col-12 pt-5 pb-5">
            <div class="text-center nome-categoria">
                
                
                <div class="container">
                    <div class="row">

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






                        {{-- @foreach ($articles->unique('subcategory') as $article )
                        <div class="col-12 col-md-3 ">
                            <div class="card-prod">
                                
                                <img src="{{Storage::url($article->subcategory->img)}}" >
                                <div class="con-text">
                                    <h2>{{$article->subcategory->name}}</h2>
                                    <a class="link-card" href="{{route('allArticles', $article)}}">  <button>See more</button></a>
                                    
                                </div>
                            </div> 
                        </div>
                        @endforeach                       --}}
                </div>
            </div>
        </div>
    </div>
</div>
</head>


</x-layouts.app>