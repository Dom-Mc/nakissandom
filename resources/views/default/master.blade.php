<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nakissa &amp; Dom</title>
	<link href="/css/all.css" rel="stylesheet">
	<!-- Fonts -->
<!---------------------- FONTS BELOW---------------------->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ek+Mukta:200,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="/js/vendor/modernizr.js"></script>
</head>
<body data-interchange="[/img/1.jpg, (default)], [/img/2.jpg, (large)]">

@yield('content')

{{-- Scripts --}}
<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/fastclick.js"></script>
<script src="/js/vendor/foundation.js"></script>
<script src="/js/vendor/foundation.reveal.js"></script>
<script src="js/foundation/foundation.interchange.js"></script>
{{-- <script src="js/foundation/foundation.alert.js"></script> --}}
	
@if($errors->any())
<script>
$('#firstModal').foundation('reveal', 'open');
</script>
@else
<script>
$(document).foundation();
</script>
@endif

</body>