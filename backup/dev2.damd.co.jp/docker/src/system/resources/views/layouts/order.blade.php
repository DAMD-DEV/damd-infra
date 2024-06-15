<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('shared.order.head')
    @yield('custom-head')
</head>
<body>
    @include('shared.products.header')
    @yield('main')
{{-- @include('shared.footer') --}}
@include('shared.products.footer')
@yield('custom-scripts')
</body>
</html>