@vite([
    'resources/css/base.css',
    'resources/css/style.css',
    'resources/css/modal.css',
    'resources/css/products_head.css',
    'resources/css/common.css',
    'resources/css/common-sp.css',
    'resources/css/general.css',
    'resources/css/general-sp.css',
    'resources/js/update.js',
])
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>        
<script src="https://damd-assets.s3.ap-northeast-1.amazonaws.com/js/cart.min.js"></script>

<link rel="stylesheet" href="{{ asset('lib/bs/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('lib/bs/css/override.css') }}">

<link rel="stylesheet" href="{{ asset('lib/stellarnav/stellarnav.css') }}">
<script type="text/javascript" src="{{ asset('lib/stellarnav/stellarnav.min.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery('.stellarnav').stellarNav({
        theme: 'light'
    });

    jQuery("[name=user_send_check]").change(function(){
        //alert();
        if(jQuery(this).prop("checked")==true){
            jQuery(".send-area").hide();
        }else{
            jQuery(".send-area").show();
        }
    });
});


<link rel="stylesheet" type="text/css" href="/common/library/bs/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/common/library/bs/css/override.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/common/css/general.css">
<link rel="stylesheet" type="text/css" href="/common/css/general-sp.css">
<link rel="stylesheet" type="text/css" href="/common/css/common.css">
<link rel="stylesheet" type="text/css" href="/common/css/common-sp.css">

<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&display=swap" rel="stylesheet">