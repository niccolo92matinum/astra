
 
 <nav class="navbar  navbar-expand-md navbar-light bg-white align-items-center shadow-sm fixed-top pippo" id="navbar-nico">
    <div class="container-fluid " >
        <a class="navbar-brand " href="{{ url('/') }}" >
            
            <img   src="/img/astra-logo.png"  class="img-fluid pl-3 " height="200px" width="200px" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                 
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav "> 
                
                <li class="dropdown  ">
                    <a href="#" class="sezioni-nav nav-link pr-5" data-toggle="dropdown"> Prodotti</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Whole House Filter</a></li>
                        <li><a href="#">Reverse Osmosis</a></li>
                        <li><a href="#">Portable Filters</a></li>
                        <li><a href="#">Portable Storage</a></li>
                        <li><a href="#">Rain Water Storage</a></li>
                    </ul>
                </li>
           
                {{-- <li class=" sezioni-nav">
                    <a class="nav-link pr-5" href="{{route('searchPage')}}">Prodotti</a>
                 
                </li>  --}}

                <li class="sezioni-nav">
                    <a class="nav-link pr-5" href="">Funzionalità</a>
                 </li>

                 <li class="sezioni-nav">
                    <a class="nav-link pr-5" href="{{route('assistenza')}}">Assistenza</a>
                    {{--  --}}
                   
                </li>

                 <li class="nav-item">
                     <form action=" {{route('searchForm')}}" method="GET" class="form-inline general-search pt-2" >
                       
                        <input class="form-control mr-sm-2 no-wrap search-nav " name="q" type="text" placeholder="Search" aria-label="Search">
                        <button class="button-nav my-2 my-sm-0 no-wrap" type="submit">Search</button>
                      </form>
                     
                </li>
                
            </ul>
            

           
        
        </div>
    </div>
</nav>

 
@push('scripts')




 


 