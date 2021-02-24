<x-layouts.app>
    
    @push('styles')
    <style>
        
    </style>
    @endpush
    
    <head>
        <div class="container-fluid pt-5 pb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Fai una ricerca su tutti gli annunci</h1>
                </div>
            </div>
        </div>
    </head>
    
    <body>
        <div class="container-fluid pt-5 pb-5">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h1 class="text-center">Filtri</h1>
                    
                    
                    <div class="accordion" id="accordionFilter">
                        <div class="card">
                            <div class="" id="categoryFilter">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Categoria
                                    </button>
                                </h2>
                            </div>
                            
                            <div id="collapseOne" class="collapse show" aria-labelledby="categoryFilter" data-parent="#accordionFilter">
                                <div id="categoryFilterWrapper" class=" pl-3">
                                    
                                    {{-- options --}}
                                    {{-- qui c'è JavaScript --}}                                   
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="card"> 
                            <div class="" id="subcategoryFilter">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Sottocategoria
                                    </button>
                                </h2>
                            </div>
                            
                            <div id="collapseTwo" class="collapse " aria-labelledby="subcategoryFilter" data-parent="#accordionFilter">
                                <div id="subCategoryFilterWrapper" class=" pl-3">
                                    
                                    {{-- options --}}
                                    
                                    {{-- qui c'è JavaScript --}} 
                                    
                                </div>
                            </div>
                        </div>
                        {{--Ricerca per nome  --}}
                        <div class="card"> 
                            <div class="" id="nameFilter">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Nome
                                    </button>
                                </h2>
                            </div>
                            
                            <div id="collapseThree" class="collapse " aria-labelledby="titleProduct" data-parent="#accordionFilter">

                                   
                                        <div class="form-group">
                                            
                                            <input   id="productTitle" type="text" class="mt-0 bg-secondary w-100" >
                                            
                                        </div>
                                    
                               
                                
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            
            
            
            
            <div class="col-12 col-md-8">
                <h1 class="text-center pb-5">Articoli</h1>
                
                <div id="wrapperProducts" class="row">
                    
                    
                </div>
                
                
            </div>
        </div>
    </div>
</div>
</body>

@push('scripts')

<script>
    
    fetch('{{route('dataArticles')}}')
    .then(response => response.json())
    .then(data =>{
        console.log(data);
        
        

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
                <input class="form-check-input" type="radio" name="categories" id="${el}" value="option1" checked>
                <label class="form-check-label"  data-category_id="${el.toLowerCase()}" for="${el}">${el}</label>
                
                `
                categoryFilterWrapper.appendChild(div)
            })
            // questo è per mostrare l'opzione tutte
            let all = document.createElement('div')
            all.classList.add('dioPorco')
            all.innerHTML = 
            `
            <input class="form-check-input" type="radio" name="categories" id="Tutte" value="option1" checked>
            <label class="form-check-label"  data-category_id="tutte" for="Tutte">Tutte</label>
            
            `
            categoryFilterWrapper.appendChild(all)
        }
        function filterByCategory(dataInput) {
            let clickable = document.querySelectorAll('[data-category_id]')

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
                <input class="form-check-input" type="radio" name="subcategories" id="${el}" value="option2" checked>
                <label class="form-check-label"  data-subcategory_id="${el.toLowerCase()}" for="${el}">${el}</label>
                
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
                col.classList.add('col-12', 'col-md-6', 'col-sm-6','col-lg-4')
                col.innerHTML = 
                `
                <div class="card-prod">
                    
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