<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anandotsava'16
      @if(isset($title))
        | {{ $title }}
      @endif
    </title>
    <link rel="stylesheet" href="/anand/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/anand/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/anand/public/css/styles.css">
    <link rel="stylesheet" href="/anand/public/css/gallery.css">
    <link rel="stylesheet" href="/anand/public/css/material-cards.css">
    <link rel="stylesheet" href="/anand/public/css/demo.css" />
    <link rel="stylesheet" href="/anand/public/css/style2.css" />
    <link rel="stylesheet" href="/anand/public/css/db.css" />
    <link rel="stylesheet" href="/anand/public/css/custom.css" />
    <link rel="stylesheet" href="/anand/public/css/sidebar.css" />
		<noscript>
			<link rel="stylesheet" href="/anand/public/css/styleNoJS.css" />
		</noscript>
    <link rel="stylesheet" href="/anand/public/css/hover-min.css" />
<link rel="stylesheet" href="/anand/public/css/hover-min.css" />
  <link rel="stylesheet" href="/anand/public/css/support.css">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button id="toggleNav" type="button" class="navbar-toggle fa fa-bars"></button>
          <a class="navbar-brand" href="home">
            <img src="/anand/public/img/brand2.png">
          </a>
        </div>
        <div id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/anand"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="events"><span class="fa fa-modx"></span> Events</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="/anand/public/js/jquery.js"></script>
    @include('../schedule')
    <div id="main">
      @yield('content')
    </div>
    <script src="/anand/public/js/bootstrap.min.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASQ2WwplO0WCTrpCdd_6EvdGKruNiHmn8&callback=initMap">
    </script>
    <script src="/anand/public/js/scripts.js"></script>
    @if(isset($link))
      <script>
        $('#myNavbar a[href="{{$link}}"]').addClass('activeNav');
      </script>
    @endif
  </body>
</html>
