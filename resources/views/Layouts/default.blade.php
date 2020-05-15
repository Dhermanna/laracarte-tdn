<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('/bootstrap/js/jquery-3.5.0.min.js')}}"> </script>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"> </script>
    <title>{{page_Title($title ?? '')}}</title>
    
</head>
<body>
    @include('layouts/partials/_nav')
    @yield('contenu')
    @include('layouts/partials/_footer')
    @include('flashy::message')
</body>
</html>