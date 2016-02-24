<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tạo form đăng ký người dùng</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Đăng ký người dùng mới</h1>
	<form method="POST" action={{url('/auth/register')}}>
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
			<label for="name">Tên</label>
			<input type="text" name="name" id="name" placeholder="Tên">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="Email">
		</div>
		<div>
			<label for="password">Mật khẩu</label>
			<input type="password" name="password" id="password" placeholder="Password">
		</div>
		<div>
			<label for="pass_confirmation">Mật khẩu</label>
			<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Xác nhận Password">
		</div>
		<button type="submit">Đăng ký</button>
	</form>
</body>
</html>