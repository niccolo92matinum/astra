<x-layouts.app>
    
    @push('styles')
    <style>
        
        
        
        .card-search{
            background-color:var(--main-color);
            font-size: 15px;
            
        }
        
        .btn-search{
            color: white;
            font-size: 20px;
            text-decoration: none!important;
        }
        
        .labelSearch{
            color: white;
            
        }
        
        .inputSearch{
            padding-left:10px;
        }
        
        i.arrow-search {
            display: inline-block;
            border-radius: 30px;
            box-shadow: 0px 0px 2px white;
            padding: 0.3em 0.3em;
        }
        
        
        .h2search:hover i{
            transform: rotate(90deg);
            transition:  0.5s;  
            
            
            
        }
        
        .h2search:hover button{
            color: var(--icon-second-color);
        }
        
        .placeholdersearc{
            background-color: red!important;
        }
        
        label:hover {
            color: var(--icon-second-color);
        }
        
        .border-radius{
            border-top-right-radius: 20px;
            border-top-left-radius:20px;
            border-bottom-right-radius: 20px; 
        }
        
        
        
        
    </style>
    @endpush
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Search page</title>
    </head>
    
    
    <nav>
        <div id="second-navbar" class="container-fluid second-nav-main align-items-center fixed-top">
            <div class="row px-4 py-4 second-nav mt-2">
                <div class="col-12 ">
                    
                    <p class="second-nav-word  d-inline-block "> <a href="{{route('home')}}">Home /</a> SearchPage </p>
                    <p class="second-nav-word float-right "> <a href="javascript:history.back()">Indietro</a> </p>
                    
                </div>
            </div>
        </div>
    </nav>
    
    <body>
        
        <div class="container-fluid mar-100 back-gray py-5 px-5">
            
            <div class="row pt-5  ">
                <div class="col-12 col-md-4  " >
                    
                    <div style="position:sticky; top: 170px; ">
                        <h1 class="text-center title-home pb-5">Ricerca <i class="fas fa-search"></i> </h1>
                        
                        
                        <div class="accordion  pt-3" id="accordionFilter">
                            <div class="card card-search  border-radius">
                                <div  id="categoryFilter">
                                    <h2 class="mb-0 h2search">
                                        <button class="btn btn-link btn-block text-left btn-search" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Categoria <i class="fas fa-arrow-right  float-right   arrow-search text-center "></i> 
                                        </button>
                                    </h2>
                                </div>
                                
                                <div id="collapseOne" class="collapse" aria-labelledby="categoryFilter" data-parent="#accordionFilter">
                                    <div id="categoryFilterWrapper" class=" pt-1 pl-3">
                                        
                                        {{-- options --}}
                                        {{-- qui c'è JavaScript --}}                                   
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="cardn card-search"> 
                                <div class="" id="subcategoryFilter">
                                    <h2 class="mb-0 h2search">
                                        <button class="btn btn-link btn-block text-left text-left btn-search" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Sottocategoria<i class="fas fa-arrow-right  float-right  arrow-search text-center "></i> 
                                        </button>
                                    </h2>
                                </div>
                                
                                <div id="collapseTwo" class="collapse " aria-labelledby="subcategoryFilter" data-parent="#accordionFilter">
                                    <div id="subCategoryFilterWrapper" class="pt-1 pl-3">
                                        
                                        {{-- options --}}
                                        
                                        {{-- qui c'è JavaScript --}} 
                                        
                                    </div>
                                </div>
                            </div>
                            {{--Ricerca per nome  --}}
                            <div class="card card-search"> 
                                <div class="" id="nameFilter">
                                    <h2 class="mb-0 h2search">
                                        <button class="btn btn-link btn-block text-left  text-left btn-search" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Codice Articolo<i class="fas fa-arrow-right  float-right  arrow-search text-center "></i> 
                                        </button>
                                    </h2>
                                </div>
                                
                                <div id="collapseThree" class="collapse " aria-labelledby="titleProduct" data-parent="#accordionFilter">
                                    
                                    
                                    <div class="form-group">
                                        
                                        <input   id="productTitle" type="text" placeholder="Search"  class="mt-0 bg-secondary w-100 placeholdersearch" >
                                        
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
                    
                </div>
                
                
                <div class="col-12 col-md-8 ">
                    <h1 class="text-center   title-home pb-0">Articoli disponibili</h1>
                    
                    <div  id="wrapperProducts" class="row">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@push('scripts')

<script>
    
    fetch('{{route('dataArticles')}}')
    .then(response => response.json())
    .then(data =>{
      
        
        
        
        (function init() {
            populateCategoriesFilter(data)
            filterByCategory(data)
            populateSubCategoriesFilter(data)
            filterBySubcategory(data)
            filterByTitle(data)
            showProducts(data)
        })()
        //funzione per popolare i filtri delle categorie 
        
        function populateCategoriesFilter(dataInput) {
            let categories = Array.from(new Set(data.map(el => el.category_id))).sort()
            
            let categoryFilterWrapper = document.querySelector('#categoryFilterWrapper')
            
            
            categories.forEach(el => {
                
                let div = document.createElement('div')
                div.classList.add('dioPorco')
                div.innerHTML = 
                `
                <input  class="inputSearch  " class="form-check-input" type="radio" name="categories" data-category_id="${el.toLowerCase()}"  value="option1" checked>
                <label  class="labelSearch " class="form-check-label"  data-category_id="${el.toLowerCase()}" for="${el}">${el}</label>
                
                `
                categoryFilterWrapper.appendChild(div)
            })
            // questo è per mostrare l'opzione tutte
            let all = document.createElement('div')
            all.classList.add('dioPorco')
            all.innerHTML = 
            `
            <input class="inputSearch" class="form-check-input" type="radio" name="categories" data-category_id="tutte" value="option1" checked>
            <label class="labelSearch" class="form-check-label"  data-category_id="tutte" for="Tutte">Tutte</label>
            
            `
            categoryFilterWrapper.appendChild(all)
        }
        function filterByCategory(dataInput) {
            let clickable = document.querySelectorAll( '[data-category_id]')
            
            clickable.forEach(el => {
                el.addEventListener('click', ()=>{
                    let choosenCategory = el.dataset.category_id
                    
                    if (choosenCategory == "tutte") {
                        showProducts(data)
                    } else{
                        
                        let filteredProducts = dataInput.filter(el => el.category_id.
                        toLowerCase() == choosenCategory)
                        
                        showProducts(filteredProducts)
                    }
                    
                    
                    
                })
            })
            
        }
        function populateSubCategoriesFilter(dataInput) {

          
            
            let subcategories = Array.from(new Set(data.map(el => el.subcategory_id))).sort()
            
            
            let subCategoryFilterWrapper = document.querySelector('#subCategoryFilterWrapper')
            
            
            subcategories.forEach(el => {
                
                let div = document.createElement('div')
                div.classList.add('dioPorco')
                div.innerHTML = 
                `
                
                <input   class="inputSearch" class="form-check-input"  type="radio" name="subcategories" data-subcategory_id="${el.toLowerCase()}" value="option2" checked>
                <label  class="labelSearch" class="form-check-label"  data-subcategory_id="${el.toLowerCase()}" for="${el}">${el}</label>
                
                `
                subCategoryFilterWrapper.appendChild(div)
            })
            
            
        }
        function filterBySubcategory(dataInput) {
            let clickable = document.querySelectorAll('[data-subcategory_id]')
           
            clickable.forEach(el => {
                el.addEventListener('click', ()=>{
                    let choosenSubcategory = el.dataset.subcategory_id
                   
                    
                    let filteredProducts = dataInput.filter(el => el.subcategory_id.
                    toLowerCase() == choosenSubcategory)
                  
                    showProducts(filteredProducts)
                })
            })
            
        }
        function filterByTitle(dataInput) {
            
            let productTitle = document.querySelector('#productTitle')
            productTitle.addEventListener('input', ()=>{
                
                if(productTitle.value.length > 2) {
                    let filteredProducts = dataInput.filter(el => el.title.toLowerCase().
                    includes(productTitle.value.toLowerCase()))
                    showProducts(filteredProducts);
                };   
            })
        }     
        function showProducts(dataInput) {
            let wrapperProducts = document.querySelector('#wrapperProducts')

           
            wrapperProducts.innerHTML = " "
            dataInput.forEach(el => {
                let col = document.createElement('div')
                col.classList.add('col-12', 'col-md-6', 'col-sm-6','col-lg-4','pt-4')
                col.innerHTML = 
                `
                <div class="card-prod ">
                    
                    <img src= "/storage/${el.img}" >
                    <div class="con-text">
                        <h2>${el.title}</h2>
                        <a class="link-card" href="/show/ ${el.id}"><button>VAI</button></a>
                        
                    </div>
                </div>
                `
                wrapperProducts.appendChild(col)
            })
            
        }
        
    })
    
</script>

@endpush

</x-layouts.app>