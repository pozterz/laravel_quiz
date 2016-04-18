<html>
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href=" {{ URL::asset('css/bootstrap.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
	<title></title>
	<link rel="stylesheet"  href="{{URL::asset('css/style.css')}}">
</head>
	
<body>
	@yield('content')
</html>