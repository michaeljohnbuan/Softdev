@extends('viewrequestmaster')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>View Request for Utensils Here</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Name of Requester</th>
        <th>Utensils For</th>
        <th>Population</th>
        <th>Date</th>
        <th>Evacuation Center Name</th>
        <th>Address</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
      {{--
      <a href="{{route('viewrequestforutensils.create')}}" class="btn btn-info pull-right">Create New Data</a><br><br>
      --}}
      <?php $no=1; ?>
      @foreach($viewrequestsforutensils as $viewrequestforutensils)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$viewrequestforutensils->user_name}}</td>
          <td>{{$viewrequestforutensils->utensilsfor}}</td>
          <td>{{$viewrequestforutensils->population}}</td>
          <td>{{$viewrequestforutensils->date}}</td>
          <td>{{$viewrequestforutensils->evac_name}}</td>
          <td>{{$viewrequestforutensils->address}}</td>
          <td>{{$viewrequestforutensils->status}}</td>
          <td>
            <form class="" action="{{route('viewrequestforutensils.destroy',$viewrequestforutensils->id)}}" method="post">
              <input type="hidden" name="_method" value="Delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('viewrequestforutensils.edit',$viewrequestforutensils->id)}}" class="btn btn-primary">Change Status</a><br><br>
              {{--<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel your request?');" name="name" value="Cancel">--}}
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
  @stop