<x-layouts.app>
    
    @push('styles')
    <style>
        .lead a{
          text-decoration: none;
          color: var(--icon-second-color);
        } 

        .lead a:hover{
         
          font-size:40px;
          transition-duration: 1.5s;
        }

    </style>
    @endpush

    <div class="container-fluid back-gray pt-5 pl-5 pr-5">
        <div class="row ">
          <div class="col-12 py-5  mt-5">
            <h1 class=" main-scritte text-center">Risultati della ricerca</h1>
            <h6 class="lead">Per una ricerca più accurata vai nella <strong> <a href="{{route('searchPage')}}">"Search Page"</Search></a> </strong></h6>
          </div>
        
          <div class="row" style="width: 100%">
              
                @foreach ($articles as $article)
                <div class=" col-12 col-md-3 ">
                  <div class="card-prod  ">
                    
                    <img src="{{Storage::url($article->img)}}" >
                    <div class="con-text">
                      <h2>{{$article->title}}</h2>
                      <a class="link-card" href="{{route('show', $article->id)}}">  <button>VAI</button></a>
                      {{-- --}}
                    </div>
                  </div>
                  
                </div>
                @endforeach
            
          </div>  
      </div>


    @push('scripts')
    
    <script>
        
        
        
    </script>
    
    @endpush
    
</x-layouts.app>