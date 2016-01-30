@extends('layouts.default')
@section('content')
<div id="regWrapper">
  <div id="regInner">
    <img class="img-responsive" src="/anand/public/img/login.png">
    <form class="form coll" onsubmit="return validate()" action="reg/validate/coll" method="post">
        <div class="input-group form-group-lg" id="divId">
          <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
          <input class="form-control" name="id" type="text" placeholder="College id">
          <a class="form-control-feedback hidden err" data-toggle="tooltip" title="Please enter a valid id">
            <span class="fa fa-remove"></span>
          </a>
        </div>
        <div class="input-group form-group form-group-lg" id="divPasswd">
          <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input class="form-control" name="passwd" type="password" placeholder="Enter Password">
          <a class="form-control-feedback hidden err" data-toggle="tooltip" title="Invalid id/password combination">
            <span class="fa fa-remove"></span>
          </a>
        </div>
        <button type="submit" class="btn-lg">Submit</button>
    </form>
    <div id="belowForm">
      <h4 id="coll" class="active">COLLEGE</h4>
      <h4 id="fs">FASHION SHOW</h4>
      <h4 id="botb">BOTB</h4>
    </div>
  </div>
</div>
@if(Session::has('err'))
<script>
if("{{Session::get('err')[0]}}" == "coll")
$('#coll').click();
else if("{{Session::get('err')[0]}}" == "fs")
$('#fs').click();
else
$('#botb').click();
  if("{{Session::get('err')[1]}}" == 'id') {
    $('#divId a')
      .removeClass('hidden')
    $('#divId').addClass('has-error');
    $('#divPasswd').removeClass('has-error');
    $('#divPasswd a').addClass('hidden');
  } else {
    $('#divPasswd a')
      .removeClass('hidden')
      .focus();
    $('#divPasswd').addClass('has-error');
    $('#divId').removeClass('has-error');
    $('#divId a').addClass('hidden');
  }
</script>
@endif
<script>
var validate = function() {
  if($('input[name=id]').val().length == 0) {
    $('#divId a')
    .addClass('err')
    .attr('data-toggle', 'tooltip')
    .attr('title', 'Please fill in Id');
    $('#divId').addClass('has-error');
    $('#divPasswd').removeClass('has-error');
    $('#divId a').removeClass('hidden');
    $('#divPasswd a').addClass('hidden');
    return false;
  } else if($('input[name=passwd]').val().length == 0) {
    $('#divPasswd').addClass('has-error');
    $('#divId').removeClass('has-error');
    $('#divPasswd a')
      .removeClass('hidden')
      .attr('title', 'Please fill in password')
      .hover();
    $('#divId a').addClass('hidden');
    return false;
  }
  return true;
}
$('#regInner').css({'padding-top': ($(window).height() / 2) - 143});
$('#schedule').addClass('hidden');
$('#belowForm h4').click(function() {
  $('#belowForm h4').each(function() {
    $(this).removeClass('active');
  });
  $(this).addClass('active');
  if($(this).html() == "COLLEGE") {
    $('#regInner form')
      .removeClass('fs')
      .removeClass('botb')
      .addClass('coll')
      .attr('action', 'reg/validate/coll');
    $('#divId input').attr('placeholder', 'Enter College Id');
  }
  else if($(this).html() == "FASHION SHOW") {
    $('#regInner form')
      .removeClass('coll')
      .removeClass('botb')
      .addClass('fs')
      .attr('action', 'reg/validate/fs');
    $('#divId input').attr('placeholder', 'Enter Fashion Team Id');
  }
  else {
    $('#regInner form')
      .removeClass('coll')
      .removeClass('fs')
      .addClass('botb')
      .attr('action', 'reg/validate/botb');
    $('#divId input').attr('placeholder', 'Enter Band Team Id');
  }
});
</script>
@endsection
