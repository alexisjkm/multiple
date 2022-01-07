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
    <div class="container">
        @yield('content')
    </div>
    <script src="/js/bootstrap.bundle.js" ></script>
</body>
</html>
