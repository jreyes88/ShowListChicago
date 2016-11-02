@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<table class="table table-striped">
					<tr>
						<th>Date</th>
						<th>Bands</th>
						<th>Venue</th>
						<th>Description</th>
						<th>View Details</th>
					</tr>
					@foreach($shows as $show)
						<tr>
							<td>
								{{$show->show_date}}
							</td>
							<td>
								{{$show->bands}}
							</td>
							<td>
								{{$show->venue}}
							</td>
							<td>
								{{$show->description}}
							</td>
							<td>
								<a href='/shows/{{$show->id}}'>
									View Details
								</a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection