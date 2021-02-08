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
            <h1>{{$article->title}}</h1>

            <p>{{$article->description}}</p>
        </div>
    </div>
</div>


</x-layouts.app>