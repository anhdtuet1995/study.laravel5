@extends('templates.master')

@section('title', 'create_new_post')

@section('content')
	<h1>Thêm bài viết mới</h1>
	{!! Form::open(['url' => 'articles']) !!}
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name') !!}<br>

		{!! Form::label('author', 'Author:') !!}
		{!! Form::text('author') !!}<br>
		
		{!! Form::label('created_at', 'Create date:')!!}
		{!! Form::input('date', 'created_at', date("Y-m-d"))!!}<br>

		{!! Form::submit('Them moi') !!}
	{!! Form::close() !!}
	@if (!empty($errors))
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
@endsection