@extends('templates.master')

@section('title', 'Edit')

@section('content')
	<h1>Ma so bai viet {!! $article->id !!}</h1>
	{!! Form::model($article,[ 'method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id] ]) !!}
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name') !!}<br>

		{!! Form::label('author', 'Author:') !!}
		{!! Form::text('author') !!}<br>
		
		{!! Form::label('created_at', 'Create date:')!!}
		{!! Form::input('date', 'created_at', date("Y-m-d"))!!}<br>

		{!! Form::submit('Cap nhat') !!}
	{!! Form::close() !!}
	@if (!empty($errors))
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
@endsection