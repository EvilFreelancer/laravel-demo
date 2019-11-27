<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('styles')

  <title>Laravel</title>

  @stack('header')

</head>
<body>

@yield('content')

@stack('footer')

</body>
</html>

