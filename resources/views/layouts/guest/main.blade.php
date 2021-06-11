<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ceci</title>
        <link rel="icon" type="image/png" sizes="16x16"  href="/favicons/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
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
	<script src="{{ asset('js/datepicker-it.js') }}"></script>
        <script type="text/javascript">
            $('.datepicker').datepicker($.datepicker.regional["it"]);  
        
        </script> 
        
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v10.0&appId=151002527008483&autoLogAppEvents=1" nonce="rlYBEY5q"></script>
        </body>

    </html>
