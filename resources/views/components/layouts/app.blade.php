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

     {{-- card CATEGORY --}}
     <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Playball&display=swap">
     <link  href="https://fonts.googleapis.com/css2?family=Viga&display=swap">
     <link  href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- link carosell header --}}
  
    @stack('styles')

   
     
</head>
<body>
    <div id="app">
       <x-navbar>

       </x-navbar>
        <main class="py-4">
            {{$slot}}
        </main>
        <x-footer>

        </x-footer>
    </div>


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
</body>
</html>
