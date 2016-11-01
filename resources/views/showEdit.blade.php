@extends('layouts.app')

@section('content')
<form action='/shows/{{$show->id}}' method='post'>
	{{ csrf_field() }}
	Date: <input type='date' name='date' value='{{$show->date}}' />
	Venue: <input type='text' name='venue' value='{{$show->venue}}' />
	Bands: <input type='text' name='bands' value='{{$show->bands}}' />
	All Ages: <input type="radio" name="allAges" value="yes"> Yes <input type="radio" name="allAges" value="no"> No
	<input type='submit' value='Update' />
</form>
@endsection