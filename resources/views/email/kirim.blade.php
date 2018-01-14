<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
</head>
<body>
	<div class="ui container">
		
	<h3 class="ui header blue">Pengirim : {{ $nama }} < {{ $email }} ></h3>
	<h5 class="sub header">Pesan : {{ $pesan }}</h5>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/semantic.js') }}"></script>
</body>
</html>