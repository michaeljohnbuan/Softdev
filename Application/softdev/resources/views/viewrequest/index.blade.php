@extends('viewrequestmaster')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>View Requests Here</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Name of Requester</th>
        <th>Food Type</th>
        <th>Food Level</th>
        <th>Population</th>
        <th>Date</th>
        <th>Evacuation Center Name</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Address</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
      <a href="{{route('viewrequest.create')}}" class="btn btn-info pull-right">Create New Data</a><br><br>
      <?php $no=1; ?>
      @foreach($viewrequests as $viewrequest)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$viewrequest->user_name}}</td>
          <td>{{$viewrequest->foodtype}}</td>
          <td>{{$viewrequest->foodlevel}}</td>
          <td>{{$viewrequest->population}}</td>
          <td>{{$viewrequest->date}}</td>
          <td>{{$viewrequest->evac_name}}</td>
          <td>{{$viewrequest->latitude}}</td>
          <td>{{$viewrequest->longtitude}}</td>
          <td>{{$viewrequest->address}}</td>
          <td>{{$viewrequest->status}}</td>
          <td>
            <form class="" action="{{route('viewrequest.destroy',$viewrequest->id)}}" method="post">
              <input type="hidden" name="_method" value="Delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('viewrequest.edit',$viewrequest->id)}}" class="btn btn-primary">Edit</a><br><br>
              <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
  @stop