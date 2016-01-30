@extends('layouts.event_default')
@section('content')
<div id="fLogin">
  <h2>Admin Login</h2>
  {{Form::open(array('url' => 'events/auth', 'method' => 'POST'))}}
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Enter username" required>
    </div>
    <div class="form-group">
      <input type="password" name="passwd" class="form-control" placeholder="Enter password" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Login</button>
    </div>
  {{Form::close()}}
</div>
@endsection
