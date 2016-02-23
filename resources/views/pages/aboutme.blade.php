@extends('templates.master')

@section('title', 'About')

@section('sidebar')
	@parent
	<p>This is appended to the master sidebar</p>
@endsection

@section('content')
	<p>This is about {{ $name }} page</p>
	<p>The current time is {{time()}}</p>
	@if(isset($name))
	<?php echo "anh yeu mai"; ?>
	@endif
	@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor
@endsection


