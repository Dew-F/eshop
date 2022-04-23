<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/app.css"/>
	<script src="https://kit.fontawesome.com/9c14c0aaf4.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		@include('includes.header')
		<div class="row">
			<div class="col-3">
				@include('includes.aside')
			</div>
			<div class="col-9 p-4">
				@include('includes.main')
			</div>
		</div>
		@include('includes.footer')
	</div>
</body>
</html>
