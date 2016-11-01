@extends('layouts.app')

@section('content')
	<h2>{{$user->name}}</h2>
	<h5>{{$user->email}}</h5>

	<ul>
		@foreach($shows as $show)
			<li>{{$show->venue}}</li>
		@endforeach
	</ul>
@endsection