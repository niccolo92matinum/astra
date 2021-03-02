<x-layouts.app>
    
    @push('styles')
    <style>
        
    </style>
    @endpush

    <div class="container-fluid back-gray pl-5 pr-5">
        <div class="row ">
          <div class="col-12 py-5 mt-5">
            <h1 class=" main-scritte text-center">Scopri quali prodotti abbiamo</h1>
          </div>
        
          <div class="row" style="width: 100%">
              
                @foreach ($articles as $article)
                <div class=" col-12 col-md-3 ">
                  <div class="card-prod  ">
                    
                    <img src="{{Storage::url($article->img)}}" >
                    <div class="con-text">
                      <h2>{{$article->name}}</h2>
                      <a class="link-card" href="{{route('subCategory', $article)}}">  <button>VAI</button></a>
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