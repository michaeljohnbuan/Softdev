@extends('viewrequestmaster')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Create Data</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="" action="{{route('viewrequest.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group{{ ($errors->has('user_name')) ? $errors->first('user_name') : '' }}">
          <input type="text" name="user_name" class="form-control" placeholder="Enter User Name Here">
          {!! $errors->first('user_name','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('foodtype')) ? $errors->first('foodtype') : '' }}">
          <input type="text" name="foodtype" class="form-control" placeholder="Enter Food Type Here">
          {!! $errors->first('foodtype','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('foodlevel')) ? $errors->first('foodlevel') : '' }}">
          <input type="text" name="foodlevel" class="form-control" placeholder="Enter Food Level Here">
          {!! $errors->first('foodlevel','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('population')) ? $errors->first('population') : '' }}">
          <input type="text" name="population" class="form-control" placeholder="Enter Population Here">
          {!! $errors->first('population','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('date')) ? $errors->first('date') : '' }}">
          <input type="text" name="date" class="form-control" placeholder="Enter Date Here">
          {!! $errors->first('date','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('evac_name')) ? $errors->first('evac_name') : '' }}">
          <input type="text" name="evac_name" class="form-control" placeholder="Enter Evacuation Name Here">
          {!! $errors->first('evac_name','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('latitude')) ? $errors->first('latitude') : '' }}">
          <input type="text" name="latitude" class="form-control" placeholder="Enter Latitude Here">
          {!! $errors->first('latitude','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('longtitude')) ? $errors->first('longtitude') : '' }}">
          <input type="text" name="longtitude" class="form-control" placeholder="Enter Longitude Here">
          {!! $errors->first('longtitude','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('address')) ? $errors->first('address') : '' }}">
          <input type="text" name="address" class="form-control" placeholder="Enter Address Here">
          {!! $errors->first('address','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('status')) ? $errors->first('status') : '' }}">
          <input type="text" name="status" class="form-control" placeholder="Change Status">
          {!! $errors->first('status','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save">
        </div>
      </form>
    </div>
  </div>
  @stop