<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RecycleHops</title>
    <style>@import url('https://fonts.googleapis.com/css2?family=Nunito:ital@0;1&family=Poppins&display=swap');</style>
    <link rel="stylesheet" href="{{ asset ('CSS/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset ('JS/index.js')}}"></script>
</head>
<body>
    @include('nav_bar')
    <div class="container-web">
        @yield('content')
    </div>
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset ('JS/typing.js')}}"></script>  


</body>
</html>