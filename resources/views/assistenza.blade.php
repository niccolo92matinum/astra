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

    <head>
        <div class="container ">
            <div class="row pt-5 pb-5">
                <div class="col-12 text-center">
                    <h1>Contattaci per qualsiasi dubbio o curiosità</h1>

                </div>
            </div>


            <div class="row pb-5 ">
                <div class="col-3 text-center assistenza pt-5">
                    <i class=" awe-assistenza fas fa-at fa-4x"></i>
                    <h5 class="pt-2">E-mail</h5>
                    <a href="{{route('mail.mailpage')}}"><p>antonio@antonio.it</p></a>
                </div>

                <div class="col-3 text-center assistenza pt-5">
                    <i class="awe-assistenza fab fa-whatsapp-square fa-4x"></i>
                    <h5 class="pt-2">WhatsApp</h5>
                    <a href="https://www.facetime.it"><p>+39 3336810157</p></a>
                    
                </div>

                <div class="col-3 text-center assistenza pt-5">
                    <i class=" awe-assistenza fas fa-phone fa-4x"></i>
                    <h5 class="pt-2">Telefono</h5>
                    <a href=""><p>+39 3336810157</p></a>
                    
                </div>

                <div class="col-3 text-center assistenza pt-5">
                    <i class="awe-assistenza fab fa-facebook fa-4x"></i>
                    <h5 class="pt-2">Facebook</h5>
                    <a href="https://it-it.facebook.com/"> <p>Antonio Sacco</p></a>
                   
                </div>


            </div>
        </div>
    
    </head>



</x-layouts.app>