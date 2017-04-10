@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Create Data</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="" action="{{route('searchalternative.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group{{ ($errors->has('place')) ? $errors->first('place') : '' }}">
          <input type="text" name="place" class="form-control" placeholder="Enter Place Here">
          {!! $errors->first('place','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('alternative')) ? $errors->first('place') : '' }}">
          <input type="text" name="alternative" class="form-control" placeholder="Enter Alternative Here">
          {!! $errors->first('alternative','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save">
        </div>
      </form>
    </div>
  </div>
  @stop