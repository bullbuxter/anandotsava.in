@extends('layouts.default')
@section('content')
<nav id="scrollNav">
  <a href="#" data-toggle="tooltip" title="Home" onclick="scrollClicked(0)" class="active"><span class="outer"></span></a>
  <a href="#" data-toggle="tooltip" title="Promo" onclick="scrollClicked(1)"><span class="outer"></span></a>
  <a href="#" data-toggle="tooltip" title="Gallery" onclick="scrollClicked(2)"><span class="outer"></span></a>
  <a href="#" data-toggle="tooltip" title="Events" onclick="scrollClicked(3)"><span class="outer"></span></a>
  <a href="#" data-toggle="tooltip" title="Contact" onclick="scrollClicked(4)"><span class="outer"></span></a>
</nav>
<div id="section1" class="bg" data-ibg-bg="public/img/perspective-bg2.jpg">
  <div id="foreground">
    <div id="abvTime">
      <img src="public/img/logo.png" height="130" width="120">
      <img src="public/img/starts_in.png" height="50" width="300">
    </div>
    <ul id="time">
      <li id="dDays" data-toggle="tooltip" title="Days!">00</li>:<li id="dHours" data-toggle="tooltip" title="Hours!">00</li>:<li id="dMins" data-toggle="tooltip" title="Minutes!">00</li>:<li id="dSecs" data-toggle="tooltip" title="Seconds!">00</li>
    </ul>
    <div id="regLink">
      <a href="reg"><img src="public/img/registration.png" height="30" width="200"></a>
    </div>
  </div>
</div>
<div id="section2" class="container-fluid">
  <div class="col-md-6">
    <video controls>
      <source src="" type="video/mp4">
      <source src="" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
  </div>
  <div class="col-md-6">
    <h2>About Anandotsava</h2>
<p>Anandotsava is derived from two words, 'Ananda' meaning joy and 'Utsava' meaning festival. Anandatsova is Nitte's very own festival of joy. The name is also a tribute to the founder of the Nitte Education Trust, Late Justice Kowdoor Sadananda Hegde.
Here's to seeing you at Nitte on the 25th, 26th and 27th of February to celebrate our festival of joy with us. This is not something you would want to miss.

In the last few years, we have seen Anandotsava take on a central theme for the three day fest. Whether it was celebrating the '100 years of Bollywood' at Anandotsava '13 or going 'Around the world in 3 days' at Anandotsava '14 or even going the 'Rock 'n' Roll' way at Anandotsava '15, there were always different aspects of popular culture that was celebrated. That is going to be no different this year.
This year we celebrate the one source of entertainment that will never disappoint us. Something that was with us then, is with us now and will be with us forever. This Anandotsava we celebrate our favourite comic characters through the ages. Join us as we celebrate with Asterix, Tintin, Archie, Chacha Chaudhary and the rest at 'Anandotsava '16- The one with the comics'.
</p>
  </div>
</div>
<div id="section3" class="container-fluid">
  @include('gallery')
</div>
<div id="section4">
  @include('main_events')
</div>
<!--<div id="section5" class="container">
  <h2>Our Sponsors</h2>
  <div class="row">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">
      <img src="img/sponsors/sp1.jpg" class="hvr-buzz-out" alt="" width="300" height="100" style="border-radius: 11px;" />
      <img src="img/sponsors/sp2.jpg" class="hvr-buzz-out" alt="" width="200" height="200" />
      <img src="img/sponsors/sp3.png" class="hvr-buzz-out" alt="" width="200" height="200" />
    </div>
  </div>
</div>-->
<div id="section6" class="container-fluid">
  <div class="row">
    <div class="col-md-6" style="margin-top: 160px;">
      <h1>CONTACTS</h1>
      <div id="contactsWrapper">
        <h2>Cultural Co-ordinator</h2>
          <h3>Prof. Vishwanatha</h3>
          <h4>vishwanath_nmamit@nitte.edu.in<br>
          +91 9980523407</h4>

        <h2>Student Co-ordinator</h2>
        <h3>Hitesh Bangera</h3>
          <h4>bangera.hitesh46@gmail.com<br>
          +91 7204536127</h4>
      </div>
        <ul id="socialLinks">
          <li><a href="https://www.facebook.com/technidarshannitte" target="_blank"><span class="fa fa-facebook"></span></a></li>
          <li><a href="https://instagram.com/technidarshan" target="_blank"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
    <div class="col-md-6">
      <div id="map"></div>
    </div>
  </div>
  <!--<center><div id="socialLinks">


</div></center>-->
</div>
<div id="section7">
  <div class="container" id="footer">

  </div>
</div>
<script src="public/js/jquery.interactive_bg.js" charset="utf-8"></script>
<script>
if($(window).width() > 800)
  $('.navbar-brand img').css({"height": "150px", "width": "280px"});
$(window).scroll(function (event) {
    /*if ($(this).scrollTop() >= 400) {
      $("nav.navbar").css({
        "background-color": "rgba(0,0,0,0.7)",
        "-webkit-transition": "300ms ease-in",
        "-moz-transition": "300ms ease-in",
        "-o-transition": "300ms ease-in",
        "transition": "300ms ease-in"
      });
      $("ul.nav a").css({"color": "rgba(238, 238, 238, 0.68)"});
    } else {
      $("nav.navbar").css({"background-color": "rgba(0,0,0,0)"});
      $("ul.nav a").css({"color": "#888"});
    }*/
    if($(this).scrollTop() > 100)
      $('.navbar-brand img').addClass('shrink');
    else
      $('.navbar-brand img').removeClass('shrink');
});
var d = new Date(1456374600000);
var mill = d.getTime();
var now = $.now();
var diff = mill - now;
var totSec = diff / 1000;
var totMin = totSec / 60;
var totHr = totMin / 60;
var time = {
  "days" : parseInt(totHr / 24),
  "hours" : parseInt(totHr % 24),
  "minutes" : parseInt(totMin % 60),
  "seconds" : parseInt(totSec % 60)
}
$("#time #dDays").html(pad(time.days));
$("#time #dHours").html(pad(time.hours));
$("#time #dMins").html(pad(time.minutes));
$("#time #dSecs").html(pad(time.seconds));
setInterval(function() {
  time.seconds--;
  if(time.seconds < 0) {
    time.minutes--;
    $("#time #dMins").html(pad(time.minutes));
    time.seconds = 59;
  }
  if(time.minutes < 0) {
    time.hours--;
    time.minutes = 59;
    $("#time #dHours").html(pad(time.hours));
    $("#time #dMins").html(pad(time.minutes));
  }
  if(time.hours < 0) {
    time.days--;
    time.hours = 23;
    $("#time #dDays").html(pad(time.days));
    $("#time #dHours").html(pad(time.hours));
  }
  $("#time #dSecs").html(pad(time.seconds));
}, 1000);
function pad(item) {
  if(item > 9)
    return item;
  else
    return '0' + item;
}
$(".bg").interactive_bg({
   strength: 50,
   scale: 1.08,
   animationSpeed: "300ms",
   contain: true,
   wrapContent: false
 });
 var scrollNav = $('#scrollNav');
scrollNav.css({"height": scrollNav.height() - 10});
var temp = [0, 550, 1188, 1854, 2550];
var scrollClicked = function(pos) {
  $('html, body').animate({scrollTop: temp[pos]}, 900);
  $('#scrollNav a').each(function() {
    $(this).removeClass('active');
  });
  $('#scrollNav a:nth-child(' + (pos+1) + ')').addClass('active');
}
</script>


@endsection
