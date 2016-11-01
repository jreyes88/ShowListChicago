@extends('layouts.app')

@section('content')

	<form action='/shows' method='post'>
		{{ csrf_field() }}
		Venue: <input type='text' name='venue' />
		<input type='submit' value='Post Show' />
	</form>

@endsection