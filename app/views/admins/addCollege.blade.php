@extends('layouts.event_default')
@section('content')
<div id="fEnter">
  <h2>Add College</h2>
  {{ Form::open(array('url' => '/admin/addCollege', 'method' => 'POST'))}}
  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="College Name" required>
  </div>
  <div class="form-group">
    <input type="text" name="place" class="form-control" placeholder="College Place">
  </div>
  <div class="form-group">
    <input type="text" name="caName" class="form-control" placeholder="Campus Ambassador">
  </div>
  <div class="form-group">
    <input type="text" name="caPhone" class="form-control" placeholder="CA Phone" maxlength="10">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="button" class="btn btn-warning" onclick="empty()">Reset</button>
  </div>
  {{Form::close()}}
</div>
@endsection
