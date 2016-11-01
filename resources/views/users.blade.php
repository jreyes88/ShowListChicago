@extends('layouts.app')

@section('content')
<ul class='list-group'>
	@foreach($users as $user)
		<li class='list-group-item'>
			<a href='/users/{{$user->id}}'>
				{{$user->name}}
			</a>
		</li>
	@endforeach
</ul>
@endsection