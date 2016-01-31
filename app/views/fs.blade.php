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
    </div>

<div class="row" id="page-content-wrapper">
  <div class="col-sm-offset-6 col-sm-6">
    <h3>
      <strong>College: </strong> {{$data->collName}}
    </h3>
  </div>
  <div class="col-sm-offset-3 col-sm-7">


    <form class="form-horizontal" action="member/update" method="post" >
             <div class="form-rows">
           <div class="col-sm-12">
               <label class="control-label col-sm-2" for="Tname">Team Name: </label>
               <div class="col-sm-10">
                 <input type="text" name="Tname" class="form-control" placeholder="Optional" maxlength="32" id="Tname"><br/>
             </div>
               <label class="control-label col-sm-2"  for="Thead">Team Head: </label>
               <div class="col-sm-10">
                 <input type="text" name="Tname" class="form-control" placeholder="Enter name" maxlength="32" id="Thead">
               <br/></div>
           </div>
           <?php  $key = 0; ?>
           @while($key < 12)
            <div class="form-group row">
        <div class="col-sm-1">
          <label>{{++$key}}.</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="pName[]" class="form-control" placeholder="Enter name" maxlength="32">
        </div>
        <div class="col-sm-5">
          <div class="input-group">
            <span class="input-group-addon">+91</span>
            <input type="text" name="pPhone[]" class="form-control" placeholder="Enter phone no" maxlength="10">
          </div>
        </div>
      </div>
      @endwhile
  </div>
  <div class="form-group col-sm-12 text-center">
    <button type="submit" class="btn btn-success">Save & Submit</button>
    <button type="reset" class="btn btn-primary">Cancel</button>
  </div>
</form>

</div>
</div>
<script>
$("html,#main").css("background-color","#E8EAF6");

</script>
@endsection
