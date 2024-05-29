<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/index.css')}}">
		<!-- <link rel="stylesheet" href="{{asset('css/common.css')}}"> -->
	</head>

	<body>
	<header>
      <nav class="navbar">
	  <img src="photo/logo.png" alt="logo" width="20%" loading="lazy" class="d-inline-block align-top">
        <ul class="menu-links">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About us</a></li>
          <li><a href="/contact">Contact us</a></li>
        </ul>
      </nav>
    </header>
		
		


		
		<content>
			<div class="container" id="container">
				@section('body')
                @show
			</div>
		</content>
		
		
		
		<footer>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container" id="foot">
				<p>©2021 &ensp; | &ensp; Mitho Library</p>
			</div>
		</div>
		</footer>
	
	
	
	
	
	
	
	
	
	
	
	
	<!--bootstrap js-->
		<script src="js/common.js"></script>
		<script src="bootstrap/jquary.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>