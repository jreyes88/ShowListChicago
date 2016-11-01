@extends('layouts.app')

@section('content')
<ul class='list-group'>
	@foreach($shows as $show)
		<li class='list-group-item'>
			<a href='/shows/{{$show->id}}'>
				{{$show->venue}}
			</a>
		</li>
	@endforeach
</ul>
@endsection