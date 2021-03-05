<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    
    @stack('styles')
    
    
    
</head>
<body>
    <div id="app">
        <x-nav>
            
        </x-nav>
        <main>
            {{$slot}}
        </main>
        <x-footer>
            
        </x-footer>
    </div>
    
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    {{-- omino spensierato malandrino --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    
    @stack('scripts')
    
    <script>
        // nabBar
        // document.addEventListener('scroll',()=>{
        //     let navbar = document.querySelector('#navbarNico')
        //     if(window.pageYOffset > 100 ){
        //         navbar.classList.add('shadow')
        //     }else{
        //         navbar.classList.remove('shadow')
        //     }
        // })
        
        // second-navbar
        
        document.addEventListener('scroll',()=>{
            let secondNavbar = document.querySelector('#second-navbar')
            if(window.pageYOffset > 100 ){
                secondNavbar.classList.add('shadow')
            }else{
                secondNavbar.classList.remove('shadow')
            }
        })
        
        
        
    </script>
    
    
</body>
</html>
