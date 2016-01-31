@extends('layouts.default')
@section('content')

<div class="container" id="dbWrapper">

    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        <strong>Participants</strong>
                </li>
                <li>
                    <a href="coll/events"><span class="fa fa-pencil-square-o "></span> Event Registration</a>
                </li>

                <li>
                    <a href="#"><span class="fa fa-inr "></span> Payment</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-print "></span> Print</a>
                </li>
                <li>
                    <a href="member/logout"><span class="fa fa-sign-out "></span> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
  <div class="row" id="page-content-wrapper">
    <div class="col-sm-6">
      <h3>
        <strong>College: </strong> {{$data->name}}
      </h3>
    </div>
    <div class="col-sm-6">
      <h3>
        <strong>You: </strong> {{$data->caName}}
      </h3>
    </div>
  <h2>Participants Details</h2>
  <form class="form" action="update" method="post" enctype="multipart/form-data">
    @foreach($data->participants as $key=>$value)
    <div class="form-group row">
      <div class="col-sm-5">
        <div class="input-group">
          <span class="input-group-addon">
            AN-
            <span class="pad">{{$data->id}}</span>-<span class="pad">{{$key+1}}</span>
          </span>
          <input type="text" name="pName[]" class="form-control" placeholder="Enter name" maxlength="32" value="{{$value->name}}">
        </div>

      </div>
      <div class="col-sm-5">
        <div class="input-group">
          <span class="input-group-addon">+91</span>
          <input type="text" name="pPhone[]" class="form-control" placeholder="Enter phone no" maxlength="10" value="{{$value->phone}}">
        </div>
      </div>
      <div class="col-sm-2">
          <span class="btn btn-default btn-file">
              Browse <input type="file" name="image[]" accept="image/gif|image/jpeg|image/png|image/jpg">
          </span>
       </div>
    </div>
    @endforeach
    <?php
      if(isset($key))
        $key++;
      else
        $key = 0;
     ?>
     <div class="form-rows">

    @while($key <= 5)
    <div class="form-group row">
      <div class="col-sm-1">
        <label>{{++$key}}.</label>
      </div>
      <div class="col-sm-5">
        <input type="text" name="pName[]" class="form-control" placeholder="Enter name" maxlength="32">
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <span class="input-group-addon">+91</span>
          <input type="text" name="pPhone[]" class="form-control" placeholder="Enter phone no" maxlength="10">
        </div>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-default btn-file">
            Browse <input type="file" name="image[]" accept="image/gif|image/jpeg|image/png|image/jpg" >
        </a>
    </div>


    </div>
    @endwhile

    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Submit</button>
      <button type="button" class="btn btn-primary" onclick="edit()">Edit</button>
      <button type="button" class="btn btn-info" id="addfield" >Add Field</button>
    </div>
  </form>


</div>
</div>

<script>
$('#dbWrapper input').each(function() {
  $(this).attr('disabled', true);
});
function edit() {
  $('#dbWrapper input').each(function() {
    $(this).attr('disabled', false);
  });
}
$(document).ready(function(){
    var formContainer=$('.form-rows');
    var fieldCount=<?php echo $key; ?>;
    $('#addfield').click(function(){
        fieldCount++;
        $(formContainer).append('<div class="form-group row"> <div class="col-sm-1"> <label>'+fieldCount+'.</label> </div> <div class="col-sm-5"> <input type="text" name="pName[]" class="form-control" placeholder="Enter name" maxlength="32"> </div> <div class="col-sm-4"> <div class="input-group"> <span class="input-group-addon">+91</span> <input type="text" name="pPhone[]" class="form-control" placeholder="Enter phone no" maxlength="10"> </div> </div> <div class="col-sm-2"> <span class="btn btn-default btn-file"> Browse <input type="file" name="image[]" accept="image/gif|image/jpeg|image/png|image/jpg"> </span> </div> </div>');
    });
});
$("html,#main").css("background-color","#E8EAF6");
$('span.pad').each(function() {
  if($(this).html() < 9)
    $(this).html('0' + $(this).html());
});

</script>
@endsection
