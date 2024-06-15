<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

@vite(['resources/scss/app.scss', 'resources/js/app.js'])

<script>
window.Laravel=@json(['csrfToken' => csrf_token()]);
</script>

<?php
    $src = '';
    foreach (config('data.FONTS') as $font) {
        $src .= 'family=' . $font['source'] . '&';
    }
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?{{ $src }}display=swap" rel="stylesheet">
<style>
    @foreach (config('data.FONTS') as $key => $font)
	.font-{{ $key }}{
		font-family: '{{ $font['name'] }}', sans-serif;
	}
    @endforeach
</style>