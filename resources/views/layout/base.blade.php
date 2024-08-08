<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport</title> 
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href={{asset("assets/fontawesome-free-6.4.2-web/css/all.min.css")}}>
</head>
<body>
  @yield('base')
  @include('sweetalert::alert')


        <script src={{asset("assets/fontawesome-free-6.4.2-web/js/all.min.js")}}></script>
</body>
</html>
