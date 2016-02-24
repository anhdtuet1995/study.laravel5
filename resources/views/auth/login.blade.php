<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập vào hệ thống</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action={{url('/auth/login')}}>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		@if(!empty($errors))
			<div>
				Có lỗi xảy ra trong quá trình đăng ký:
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div>
			<label for="email">Email:</label>
			<input type="email" name="email" placeholder="Email">
		</div>
		<div>
			<label for="password">Mật khẩu:</label>
			<input type="password" name="password" placeholder="Mật khẩu">
		</div>
		<div>
			<input type="checkbox" name="remember">Ghi nhớ
		</div>
		<div>
			<button type="submit">Đăng nhập</button>
		</div>
	</form>
</body>
</html>