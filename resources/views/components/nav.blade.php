
 @push('styles')
<style>
 

</style>
 @endpush
 
 <nav id="navbar-nico" class="navbar  navbar-expand-md navbar-light bg-white align-items-center  fixed-top pippo  "  >
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
            <ul class="navbar-nav  text-center" > 

                 <li class="sezioni-nav">
                    <a class="nav-link pr-5" href="{{route('assistenza')}}">Assistenza</a>
                    {{-- qui c'è del javascript --}}
                   
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
<script>


fetch('{{route('dataArticles')}}')
    .then(response => response.json())
    .then(data =>{
//               // console.log(data);
// // con questa funzione io andrò a mostrare tutti i nomi delle categorie in maniera dinamica
//         function nomeCategorie(dataInput) {
//             let mastercategories = Array.from(new Set(data.map(el => el.mastercategory_id))).sort()
           
//         // console.log(mastercategories);
//             let mastercategoryFilter = document.querySelector('#masterCategory')
            
      
            
//             mastercategories.forEach(el => {
              
//                 let li = document.createElement('li')
//                 li.innerHTML = 
//                 `
//                 <a href="">${el}</a>
//                 `
//                 mastercategoryFilter.appendChild(li)
//             })
//         }
//             nomeCategorie(data)
    })
</script>


<script>
    
//     document.addEventListener("scroll", ()=> {
//         let navbar = document.querySelector('#navbar-nico')
//         if (window.pageYOffset > 100 ){
//             navbar.classList.add('d-none')
//         } if(window.pageYOffset == 0){
//            navbar.classList.remove('d-none')
//         }
//        console.log(window.pageYOffset)
//    })

//    console.log('ciao');

</script>
@endpush

 


 