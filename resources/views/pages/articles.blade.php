@extends('templates.master')

@section('title', 'Articles')

@section('content')
	<ul>
		@foreach($articles as $ar)
		<li>Name: {{$ar->name}} | Author : {{$ar->author}} | {{$ar->created_at}}</li>
		@endforeach	
	</ul>
	
@endsection