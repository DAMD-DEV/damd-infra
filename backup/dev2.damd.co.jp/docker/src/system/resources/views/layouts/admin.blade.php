<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('shared.admin.head')
    @yield('custom-head')
</head>
<body>
    @include('shared.admin.header')
    <main class="d-flex">
        <div id="sidebar">
            @include('shared.admin.sidebar')
        </div>
        <div id="content" class="flex-fill">
            {{-- @include('shared.alert') --}}
            @yield('main')
        </div>
    </main>
{{-- @include('shared.footer') --}}
@yield('custom-scripts')
</body>
</html>