@extends('viewrequestforutensilsmaster')
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
        <div class="form-group{{ ($errors->has('utensilsfor')) ? $errors->first('utensilsfor') : '' }}">
          <input type="text" name="utensilsfor" class="form-control" placeholder="Enter Utensils for Here">
          {!! $errors->first('utensilsfor','<p class="help-block">:message</p>') !!}
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