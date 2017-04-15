@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Search Alternatives Here</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Place</th>
        <th>Alternative</th>
       {{-- <th>Actions</th>--}}
      </tr>
      {{--<a href="{{route('searchalternative.create')}}" class="btn btn-info pull-right">Create New Data</a>
      <br><br>

      --}}
      <?php $no=1; ?>
      @foreach($searchalternatives as $searchalternative)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$searchalternative->place}}</td>
          <td>{{$searchalternative->alternative}}</td>
          <td>
            {{--<form class="" action="{{route('searchalternative.destroy',$searchalternative->id)}}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('searchalternative.edit',$searchalternative->id)}}" class="btn btn-primary">Edit</a>
              <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
            </form>--}}
          </td>
        </tr>
      @endforeach

    </table>
    {!! $searchalternatives->links() !!}
  </div>
  @stop