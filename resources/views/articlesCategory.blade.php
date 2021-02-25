<x-layouts.app>
    
    
    @push('styles')
    
    <style>
        
    </style>
    
    @endpush
    <head>

        <h1>pipppoooo</h1>
        <div class="row">
            <div class="col-12 pt-5 pb-5">
                <div class="text-center ">
                    
                    <h1>{{$categoryPages->name}}</h1>
                    <div class="container">
                        <div class="row">
                            @foreach ($articles as $article)
                            
                            <div class="col-12 col-md-3 col-sm-6 ">
                                <div class="card-prod">
                                    
                                    <img src="{{Storage::url($article->img)}}" >
                                    <div class="con-text">
                                        <h2>{{$article->title}}</h2>
                                        <a class="link-card" href="{{route('show', $article)}}">  <button>See more</button></a>
                                        
                                    </div>
                                </div> 
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>




</x-layouts.app>