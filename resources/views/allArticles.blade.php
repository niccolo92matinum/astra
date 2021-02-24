<x-layouts.app
title="Blog"
description="Benvenuti nel blog del sito"
>
@push('style')
<style></style>
@endpush

<div class="container">
    <header class="row py-5">
        <div class="col-12 text-center">
            <h1>Titolo del blog</h1>
        </div>
    </header>
    
    <section class="row py-5">
        
            @foreach ($artSubs as $artSub)
            <div class="col-12 col-md-3  ">
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
    
    @push('scripts')
    <style>
        
    </style>
    @endpush
</x-layouts.app>