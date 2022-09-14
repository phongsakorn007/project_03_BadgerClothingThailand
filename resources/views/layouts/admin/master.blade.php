<!doctype html>
<html lang="en">
  <head>
  	<title>Project03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-6">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
						@yield('content')
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('admin/js/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/js/popper.js')}}"></script>
  <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('admin/js/main.js')}}"></script>

	</body>
</html>

