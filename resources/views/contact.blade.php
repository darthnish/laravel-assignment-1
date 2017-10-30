@extends('layout.app')


@section('content')
	<h2>This is my content section</h2>
	<ul>
		@if(count($people))
			@foreach($people as $person)
				<li>{{$person}}</li>
			@endforeach
		@endif
	</ul>
	
@stop
	
@section('footer')
	<footer>This is footer</footer>

@stop