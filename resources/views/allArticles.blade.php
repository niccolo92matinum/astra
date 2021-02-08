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

        @foreach ($articles as $article)
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <h3>{{$article->title}}</h3>
            <p>{{$article->getPreview()}}</p>
            <a href="{{$article->url()}}">Leggi</a>
        </div>
            
        @endforeach

    </section>
</div>

@push('scripts')
    <style>

    </style>
@endpush
</x-layouts.app>