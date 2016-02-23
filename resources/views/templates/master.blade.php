<html>
	<head>
		<title>Đây là trang sử dung @yield('title')</title>
	</head>
	<body>
		@section('sidebar')
			This is the master sidebar
		@show

		<div class="container">
			@yield('content')
		</div>
	</body>
</html>