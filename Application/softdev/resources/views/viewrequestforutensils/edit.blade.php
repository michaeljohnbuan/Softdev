@extends('viewrequestforutensilsmaster')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="{{route('viewrequestforutensils.update',$viewrequestforutensils->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('status')) ? $errors->first('status') : '' }}">
        <input type="text" name="status" class="form-control" placeholder="Enter Status Here" value="{{$viewrequestforutensils->status}}">
        {!! $errors->first('status','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </form>
  </div>
  @stop