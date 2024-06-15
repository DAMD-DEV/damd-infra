@vite(['resources/css/base.css', 'resources/css/style.css', 'resources/css/modal.css', 'resources/css/products_head.css', 'resources/js/update.js', 'resources/scss/front.scss'])

<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('lib/webfont/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('lib/bs/css/bootstrap.min.css') }}">

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   --}}
<script src="{{ asset('lib/jquery.js') }}"></script>

<link rel="stylesheet" href="{{ asset('lib/fancybox/jquery.fancybox.css') }}">
<script src="{{ asset('lib/fancybox/jquery.fancybox.js') }}"></script>
<script src="{{ asset('lib/fancybox/jquery.mousewheel-3.0.6.pack.js') }}"></script>
<script src="../fancybox/fancyboxck.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('a.fancybox').fancybox();
});
</script>

