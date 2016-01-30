@extends('layouts.event_default')
@section('content')
<div id="fEnter">
  <h2>Events Entry</h2>
  {{ Form::open(array('url' => 'events/entered', 'method' => 'POST'))}}
  <div class="form-group">
    <input type="text" name="evName" class="form-control" placeholder="Event Title" required>
  </div>
  <div class="form-group">
    <textarea rows="4" name="evIntro" class="form-control" placeholder="Event Intro" required></textarea>
  </div>
  <div class="form-group">
    <textarea rows="6" name="evRules" class="form-control" placeholder="Event Rules" required></textarea>
  </div>
  <div class="form-group">
    <select class="form-control" name="evCat" required>
      <option value="">Select</option>
      <option value="main">Main</option>
      <option value="creative">Creative</option>
      <option value="art">Art</option>
      <option value="dance">Dance</option>
      <option value="singing">Singing</option>
      <option value="quiz">Quiz</option>
    </select>
  </div>
  <label>Organizers:</label>
  @for($i = 0; $i < 4; $i++)
  <div class="form-group row">
    <div class="col-sm-6">
      <input type="text" name="name[]" class="form-control" placeholder="Name">
    </div>
    <div class="col-sm-6 input-group">
      <span class="input-group-addon">+91</span>
      <input type="text" name="phone[]" class="form-control" placeholder="Mobile" maxlength="10">
    </div>
  </div>
  @endfor
  <div class="form-group">
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="button" class="btn btn-warning" onclick="empty()">Reset</button>
  </div>
  {{Form::close()}}
</div>
@endsection
