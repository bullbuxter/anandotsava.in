@extends('layouts.event_default')
@section('content')
<div id="fView">
  <h2>View College By Id <span class="fa fa-edit"></span></h2>
  {{Form::open(array('url' => 'events/modify', 'method' => 'POST'))}}
    <input type="hidden" name="cId" value="{{$college->id}}">
    <div class="form-group">
      <label><strong>College ID:</strong> {{$college->id}}</label>
    </div>
    <div class="form-group">
      <input type="text" name="name" class="form-control" placeholder="College Name" value="{{$college->name}}" required>
    </div>
    <div class="form-group">
      <input type="text" name="place" class="form-control" placeholder="College Place" value="{{$college->place}}" >
    </div>
    <div class="form-group">
      <input type="text" name="caName" class="form-control" placeholder="Campus Ambassador" value="{{$college->caName}}" >
    </div>
    <div class="form-group">
      <input type="text" name="caPhone" class="form-control" placeholder="CA Phone" value="{{$college->caPhone}}" >
    </div>
    <label>Participants:</label>
      @foreach($college->participants as $participant)
      <div class="form-group row">
        <div class="col-sm-6">
          <div class="input-group">
            <span class="input-group-addon">AN-{{$college->id}}-{{$participant->pid}}</span>
            <input type="text" name="pName[]" class="form-control" placeholder="Name" value="{{$participant->name}}">
          </div>
        </div>
        <div class="col-sm-6 input-group">
          <span class="input-group-addon">+91</span>
          <input type="text" name="pPhone[]" class="form-control" placeholder="Mobile" value="{{$participant->phone}}">
        </div>
      </div>
      @endforeach
    <div class="form-group">
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="button" class="btn btn-danger">Cancel</button>
    </div>
  {{Form::close()}}
</div>
@endsection
