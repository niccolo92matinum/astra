<x-layouts.app>
    
    @push('styles')
    <style>
        
    </style>
    @endpush
    
  <h1>hai cercato: {{$q}}</h1>

  @foreach ($articles as $article)
  <div class="col-12 col-md-3  ">
      <div class="card-prod">
          
          <img src="{{Storage::url($article->img)}}" >
          <div class="con-text">
              <h2>{{$article->title}}</h2>
              <a class="link-card" href="{{route('show', $article)}}"><button>VAI</button></a>
             
          </div>
      </div>
      
  </div>
  
  
  @endforeach
  
       

@push('scripts')

<script>
    
   
    
</script>

@endpush

</x-layouts.app>