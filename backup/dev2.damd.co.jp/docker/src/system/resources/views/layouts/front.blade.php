<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('shared.front.head')
    @yield('custom-head')
</head>
<body>
    @include('shared.products.header')
    <main>
        <div id="contents" class="clearfix">
            {{-- @include('shared.alert') --}}
            <div class="inner">
                @yield('main')
            </div>
        </div>
    </main>
{{-- @include('shared.footer') --}}
@include('shared.products.footer')
<script>
    jQuery(document).ready(function($) {
        //PC
        if (window.matchMedia( '(min-width: 800px)' ).matches) {
            /*$.ajax({
                url: 'pc.js',
                dataType: 'script',
                cache: false
           });*/
        //SP
        } else {
        $(document).ready(function() {
        $(".accordion .title").hover(function(){
            $(this).css("cursor","pointer"); 
        },function(){
            $(this).css("cursor","default"); 
            });
            
        $(".accordion .detail").css("display","none");
        
        $(".accordion .title").click(function(){
            $(this).next().slideToggle("fast");
            $(this).toggleClass("active"); 
            });
        
        });
      };
    });
    </script>
@yield('custom-scripts')
</body>
</html>