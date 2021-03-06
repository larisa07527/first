<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laratest</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/js.js')}}"></script>
		<!-- Bootstrap Core CSS
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body>
	@section('menu')
	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{url('topic')}}">Главная</a></li>
        <li><a href="{{url('topic/create')}}">Новая тема</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
         <li><a href="#">Page 4</a></li> 
      </ul>
    </div>
  </nav>

  <div class="container" >
      @yield('content')
  </div> 
</body>
</html>