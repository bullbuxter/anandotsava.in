<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AN'16 | Admin</title>
    <link rel="stylesheet" href="/anand/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/anand/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/anand/public/css/entries.css">
  </head>
<body>
<div id="mains" class="container">
  <div style="text-align:center">
    <img src="/anand/public/img/brand2.png" height="100" width="500">
  </div>
  <nav class="navbar navbar-inverse" id="nav">
    <div class="container-fluid">
      <div id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="/anand/admin/eventEntry">New Event</a></li>
          <li style="padding-top:7px;">
            <input type="number" name="evId" placeholder="Event id" min="0">
            <button type="button" onclick="getEvent()" class="btn">Get</button>
          </li>
          <li><a href="/anand/admin/allEvents">View Events</a></li>
          <li><a href="/anand/admin/addColleges">Add Colleges</a></li>
          <li style="padding-top:7px;">
            <input type="number" name="collId" placeholder="College id" min="0">
            <button type="button" onclick="getCollege()" class="btn">Get</button>
          </li>
          <li><a href="/anand/admin/allColleges">View Colleges</a></li>
          <li><a href="/anand/admin/login">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
    <div id="evContent" class="col-sm-offset-3 col-sm-6">
      @yield('content')
    </div>
    <div class="col-sm-3">
      @if(Session::has('isErr'))
        @if(Session::get('isErr'))
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Failure!</strong>{{Session::get('msg')}}
        </div>
        @else
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong>{{Session::get('msg')}}
        </div>
        @endif
        <script>
        setTimeout(function() {
          $('.alert').addClass('hidden');
        }, 3000);
        </script>
      @endif
    </div>
  </div>
</div>
<script src="/anand/public/js/jquery.js"></script>
<script src="/anand/public/js/bootstrap.min.js"></script>
<script src="/anand/public/js/entries.js"></script>
</body>
</html>
