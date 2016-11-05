@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Show Details:</div>
					<div class="panel-body">
						<h3>Date: {{$show->show_date}}</h3>
						<h4>Venue: {{$show->venue}}</h4>
						<h4>Bands: {{$show->bands}}</h4>
						<h4>Details: {{$show->description}}</h4>
						<h4>
							<a href="/shows/{{$show->id}}/edit">Edit</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection