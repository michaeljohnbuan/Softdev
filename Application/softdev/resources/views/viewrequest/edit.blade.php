@extends('viewrequestmaster')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="{{route('viewrequest.update',$viewrequest->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('user_name')) ? $errors->first('user_name') : '' }}">
        <input type="text" name="user_name" class="form-control" placeholder="Enter User Name Here" value="{{$viewrequest->user_name}}">
        {!! $errors->first('user_name','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('foodtype')) ? $errors->first('foodtype') : '' }}">
        <input type="text" name="foodtype" class="form-control" placeholder="Enter Food Type Here" value="{{$viewrequest->foodtype}}">
        {!! $errors->first('foodtype','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('foodlevel')) ? $errors->first('foodlevel') : '' }}">
        <input type="text" name="foodlevel" class="form-control" placeholder="Enter Food Level Here" value="{{$viewrequest->foodlevel}}">
        {!! $errors->first('foodlevel','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('population')) ? $errors->first('population') : '' }}">
        <input type="text" name="population" class="form-control" placeholder="Enter Population Here" value="{{$viewrequest->population}}">
        {!! $errors->first('population','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('date')) ? $errors->first('date') : '' }}">
        <input type="text" name="date" class="form-control" placeholder="Enter Date Here" value="{{$viewrequest->date}}">
        {!! $errors->first('date','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('evac_name')) ? $errors->first('evac_name') : '' }}">
        <input type="text" name="evac_name" class="form-control" placeholder="Enter Evacuation Center Name Here" value="{{$viewrequest->evac_name}}">
        {!! $errors->first('evac_name','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('latitude')) ? $errors->first('latitude') : '' }}">
        <input type="text" name="latitude" class="form-control" placeholder="Enter Latitude Here" value="{{$viewrequest->latitude}}">
        {!! $errors->first('latitude','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('longtitude')) ? $errors->first('longtitude') : '' }}">
        <input type="text" name="longtitude" class="form-control" placeholder="Enter Longitude Here" value="{{$viewrequest->longtitude}}">
        {!! $errors->first('longtitude','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('address')) ? $errors->first('address') : '' }}">
        <input type="text" name="address" class="form-control" placeholder="Enter Address Here" value="{{$viewrequest->address}}">
        {!! $errors->first('address','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('status')) ? $errors->first('status') : '' }}">
        <input type="text" name="status" class="form-control" placeholder="Enter Status Here" value="{{$viewrequest->status}}">
        {!! $errors->first('status','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </form>
  </div>
  @stop