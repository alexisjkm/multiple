<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'Creando Ejemplo') }} | @yield('title')</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body>
        <div class="container" role="main">
            <div class="w-100 p-3" ></div>
            <div class="w-100 p-3" ></div> 
            <!--Js app -->
            <script src="/js/profesor.js"></script>
            <!-- <script src="/js/preguntas.js"></script> -->
            <input type="hidden" id="token" name="token" value="{!!csrf_token()!!}">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            @yield('content')
        </div>
        <script src="/js/bootstrap.bundle.js" ></script>
    </body>
</html>
