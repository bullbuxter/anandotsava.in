@extends('layouts.event_default')
@section('content')
<div id="fView">
  <h2>View Event By Id <span class="fa fa-edit"></span></h2>
  {{Form::open(array('url' => 'events/modify', 'method' => 'POST'))}}
    <input type="hidden" name="evId" value="{{$entries->evId}}">
    <div class="form-group">
      <label><strong>Event ID:</strong> {{$entries->evId}}</label>
    </div>
    <div class="form-group">
      <input type="text" name="evName" class="form-control" placeholder="Event Title" value="{{$entries->evName}}" required>
    </div>
    <div class="form-group">
      <textarea rows="4" name="evIntro" class="form-control" placeholder="Event Intro" required>{{$entries->evIntro}}</textarea>
    </div>
    <div class="form-group">
      <textarea rows="6" name="evRules" class="form-control" placeholder="Event Rules" required>{{$entries->evRules}}</textarea>
    </div>
    <div class="form-group">
      <select class="form-control" name="evCat" id="catSelector" required>
        <option value="">Select</option>
        <option value="main">Main</option>
        <option value="creative">Creative</option>
        <option value="art">Art</option>
        <option value="dance">Dance</option>
        <option value="singing">Singing</option>
        <option value="quiz">Quiz</option>
      </select>
      <script>
        document.getElementById('catSelector').value = "{{$entries->evCat}}";
      </script>
    </div>
    <label>Organizers:</label>
      <?php $key = -1; ?>
      @foreach($entries->organizers as $key=>$organizer)
      <div class="form-group row">
        <div class="col-sm-6">
          <input type="text" name="name[]" class="form-control" placeholder="Name" value="{{$organizer->name}}">
        </div>
        <div class="col-sm-6 input-group">
          <span class="input-group-addon">+91</span>
          <input type="text" name="phone[]" class="form-control" placeholder="Mobile" value="{{$organizer->phone}}">
        </div>
      </div>
      @endforeach

      @while(++$key < 4)
      <div class="form-group row">
        <div class="col-sm-6">
          <input type="text" name="name[]" class="form-control" placeholder="Name">
        </div>
        <div class="col-sm-6 input-group">
          <span class="input-group-addon">+91</span>
          <input type="text" name="phone[]" class="form-control" placeholder="Mobile">
        </div>
      </div>
      @endwhile
    <div class="form-group">
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="button" class="btn btn-danger">Cancel</button>
    </div>
  {{Form::close()}}
</div>
@endsection
