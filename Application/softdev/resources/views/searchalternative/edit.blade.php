@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="{{route('searchalternative.update',$searchalternative->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('place')) ? $errors->first('place') : '' }}">
        <input type="text" name="place" class="form-control" placeholder="Enter Place Here" value="{{$searchalternative->place}}">
        {!! $errors->first('place','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('alternative')) ? $errors->first('place') : '' }}">
        <input type="text" name="alternative" class="form-control" placeholder="Enter Alternative Here" value="{{$searchalternative->alternative}}">
        {!! $errors->first('alternative','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </form>
  </div>
  @stop