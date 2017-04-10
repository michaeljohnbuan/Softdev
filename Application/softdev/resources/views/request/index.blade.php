@extends('agegroupsmaster')
@section('content')
	<div class="row")> 
		<div class="col-md-12">
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>User ID</th>
						<th>User Full Name</th>
						<th>Food Type</th>
						<th>Food Level</th>
						<th>Population</th>
						<th>Date Needed</th>
						<th>Evacuation Name</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Address</th>
						<th>Status</th>
					</tr>
					{{ csrf_field() }}
						<?php $no=1; ?>
						@foreach($food_request as $food_request)
						<td>{{$no++}}</td>
						<td>{{$food_request->user_id}}</td>
						<td>{{$food_request->user_name}}</td>
						<td>{{$food_request->foodtype}}</td>
						<td>{{$food_request->foodlevel}}</td>
						<td>{{$food_request->population}}</td>
						<td>{{$food_request->date}}</td>
						<td>{{$food_request->evac_name}}</td>
						<td>{{$food_request->latitude}}</td>
						<td>{{$food_request->longtitude}}</td>
						<td>{{$food_request->address}}</td>
						<td>{{$food_request->status}}</td>
						<td>
						<form class="" action="{{route('foodrequests.destroy', $food_request->id)}}" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<a href="{{route('foodrequests.edit', $food_request->id)}}" class="btn btn-primary">Edit</a>
						<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');" name="name" value="delete">
							</form>  		

							</td>

						</tr>
						@endforeach 
				</table>
			</div>
		</div>
	</div>



@endsection