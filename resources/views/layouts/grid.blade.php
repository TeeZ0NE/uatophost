<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- styles --}}
  @include('layouts.parts.header.styles')
</head>
<body>
  {{-- header --}}
  @include('layouts.parts.header.header')
  {{-- main content --}}
  @section('content')@show
  {{-- footer--}}
  @include('layouts.parts.footer.footer')

</body>
</html>