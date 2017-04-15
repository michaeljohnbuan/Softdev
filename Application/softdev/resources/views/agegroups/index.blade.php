@extends('agegroupsmaster')
@section('content')
	<div class="row")> 
		<div class="col-md-12">
			<div class="col-md-12">
      			<h1>View Population Age Groups Here</h1>
    		</div>
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th>Food Manager</th>
						<th>Evacuation Center</th>
						<th>Toddlers and Kids</th>
						<th>Teenagers</th>
						<th>Older People</th>
						<th>Senior Citizens</th>
						<th>Total</th>
						{{--<th> Action</th>--}}
					</tr>
						{{ csrf_field() }}
						<?php $no=1; ?>
						@foreach($agegroups as $agegroup)
						
						<td>{{$agegroup->user_name}}</td>
						<td>{{$agegroup->evac_name}}</td>
						<td>{{$agegroup->toddler_kid}}</td>
						<td>{{$agegroup->teen}}</td>
						<td>{{$agegroup->older}}</td>
						<td>{{$agegroup->seniorcitizen}}</td>
						<td>{{$agegroup->total}}</td>
						<td>
							{{--<form class="" action="{{route('agegroups.destroy', $agegroup->id)}}" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<a href="{{route('agegroups.edit', $agegroup->id)}}" class="btn btn-primary">Edit</a>
						<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');" name="name" value="delete">
							</form> --}} 		

							</td>

						</tr>
						@endforeach 
				</table>
				{!! $agegroups->links() !!}
			</div>
		</div>
	</div>



@endsection