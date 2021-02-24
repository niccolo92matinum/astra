<x-layouts.app
title="{{$article->title}}"
description="{{$article->getPreview()}}">

@push('styles')
<style>
    
</style>

@endpush

<div class="container">
    <div class="row py-5">
        <div class="col-12 text-center">
            
            
            <div class="row">
                
                <div class="col-12 col-md-6 py-5">
                    <img class="img-fluid" src="{{Storage::url($article->img)}}"  >
                </div>
                <div class="col-12 col-md-6 py-5">
                    <h1>{{$article->title}}</h1>
                    <div class="py-4">
                        <p>{!!$article->description!!}</p>
                    </div>
                </div>
            </div>
            <h1  >Descrizione</h1>
            <p>{!!$article->property!!}</p>
        </div> 
    </div>
</div>


<div class="container fluid">
    <div class="row">
        <div class="col-12 text-center">

            <h1 class=" " >Articoli correlati</h1>
        </div>
        
    </div>

    <div class="row">
        <div class="col-3">
            <h1>Qui dovrebbero andare altri articoli simili</h1>
        </div>
    </div>
</div>


</x-layouts.app>