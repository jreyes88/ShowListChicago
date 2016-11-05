@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Post a New Show!</div>
				<div class="panel-body">
					<form action='/shows' method='post'>
						{{ csrf_field() }}
						<div class="form-group">
							<label for="showDateInput">
								Show Date:
							</label>
							<input type='date' class="form-control" name='show_date' />
						</div>
						<div class='form-group'>
							<label for='bandsInput'>
							Bands:
							</label>
							<input type='text' class="form-control" name='bands' />
						</div>
						<div class='form-group'>
							<label for='venueInput'>
								Venue: 
							</label>
							<input type='text' class="form-control" name='venue' />
						</div>
						<div class='form-group'>
							<label for='descriptionInput'>
								Description:
							</label>
							<input type='text' class="form-control" name='description' />
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
							Post Show
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection