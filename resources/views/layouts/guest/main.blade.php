<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ceci</title>
         <meta name="viewport" content="width=device-width, user-scalable=no" />
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&family=Taviraj:wght@100&display=swap" rel="stylesheet">    
         <link href=" {{ asset('css/app.css')  }} " rel="stylesheet">
         <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
         <link href=" {{ asset('css/style.css')  }} " rel="stylesheet">
    </head>
        <body>
        <header>
            @include('guest.header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('guest.footer')
        </footer>
       
        @yield('script')
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/jquery-ui.min.js')  }}"></script>
        <script type="text/javascript">
            $('.datepicker').datepicker({  
               format: 'mm-dd-yyyy'
             });  
        
        </script> 
        
      
        </body>
    </html>
