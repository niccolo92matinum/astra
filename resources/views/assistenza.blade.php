<x-layouts.app>
    
    
    @push('styles')
    <style>
        .awe-assistenza{
            color: var(--icon-second-color);
            
        }
        
        .assistenza a{
            text-decoration: none !important;
            color: var(--main-color);   
        }
        
        .assistenza a:hover{
            /* color: var(--icon-second-color); */
            color: var(--main-color);
            font-size: 20px;
            transition: 1s;
        }
    </style>
    @endpush
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Help page</title>
    </head>
    <body> 
        <div class="container ">
            <div class="row pt-5 pb-5">
                <div class="col-12 text-center">
                    <h1>Contattaci per qualsiasi dubbio o curiosità</h1>
                    
                </div>
            </div>
            
            
            <div class="row pb-5 ">
                <div class="col-6 text-center assistenza pt-5">
                    <i class=" awe-assistenza fas fa-at fa-4x"></i>
                    
                    <a href="{{route('mail.mailpage')}}"><h5 class="pt-2">Vai all'invio E-Mail</h5><p>astrasacco@libero.it</p></a>
                </div>
              
                
                <div class="col-6 text-center assistenza pt-5">
                    <i class=" awe-assistenza fas fa-phone fa-4x"></i>
                    <h5 class="pt-2">Telefono</h5>
                    <a href=""><p>+39 3336810157</p></a>
                    
                </div>   
            </div>
        </div>
        
    </h>
    
</body>
</html>



</x-layouts.app>