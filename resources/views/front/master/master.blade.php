<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Angel Make UP - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    @hasSection('css')
        @yield('css')
    @endif
</head>
<body>

@include('front.includes.header')

@yield('content')

@include('front.includes.footer')

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
