<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('libraries.styles')

</head>
<body>
@include("layouts.nav")
    @yield('content')
    @include('libraries.scripts')
   
    
</body>
</html>