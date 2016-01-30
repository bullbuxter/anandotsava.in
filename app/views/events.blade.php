@extends('layouts.default')
@section('content')
<div id="topbar">
  <div class="has-feedback" style="padding-left:0">
    <input type="search" placeholder="Search" class="form-control">
    <span class="fa fa-search inputIcon"></span>
  </div>
</div>
<div id="sidebar">
  <center><a class="btn" href="reg">REGISTER</a></center>
  <ul>
    <li class="iDisabled">CATEGORIES</li>
    <li class="active"><a href="#" class="filter" data-filter="all">All Categories</a></li>
    <li><a href="#" class="filter" data-filter="main">Main Events</a></li>
    <li><a href="#" class="filter" data-filter="creative">Creative</a></li>
    <li><a href="#" class="filter" data-filter="art">Art</a></li>
    <li><a href="#" class="filter" data-filter="dance">Dance</a></li>
    <li><a href="#" class="filter" data-filter="singing">Singing</a></li>
    <li><a href="#" class="filter" data-filter="quiz">Quiz</a></li>
  </ul>
</div>
<div id="EventsWrapper" class="container-fluid adjust">
  <div class="row">
    @foreach($events as $event)
      <div class="col-md-3 col-xs-12 col-sm-6 sss">
          <article class="material-card {{$event->evCat}}">
            <h2><span>{{$event->evName}}</span></h2>
            <div class="mc-content">
                <div class="img-container">
                    <img class="img-responsive" src="public/img/events/{{$event->evId}}.jpg">
                </div>
                <div class="mc-description">
                  <h3>INTRODUCTION:</h3>
                  <h4>{{$event->evIntro}}</h4>
                  <h3>Rules:</h3>
                  <h4>
                    <ol>
                      {{$event->evRules}}
                    </ol>
                  </h4>
                  <h3>Contact:</h3>
                  <ul id="contacts">
                    @foreach($event->organizers as $org)
                    <li>
                      <h4>{{$org->name}}</h4>
                      <p>+91 {{$org->phone}}</p>
                    </li>
                    @endforeach
                  </ul>
                </div>
            </div>
            <a class="mc-btn-action">
                <i class="fa fa-bars"></i>
            </a>
        </article>
    </div>
    @endforeach
  </div>
</div>
<script>
$(function() {
    $('.material-card > .mc-btn-action').click(function () {
        var card = $(this).parent('.material-card'),
          icon = $(this).children('i'),
          div = card.parent('.sss'),
          content = card.children('.mc-content'),
          desc = content.children('.mc-description');
        icon.addClass('fa-spin-fast');
        if (card.hasClass('mc-active')) {
            card.removeClass('mc-active');
            div.removeClass('col-md-9');
            div.addClass('col-md-3');
            window.setTimeout(function() {
                icon
                    .removeClass('fa-arrow-left')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-bars');
            }, 800);
            card.css({'height': 0});
            if($(window).width() < 480) {
              card.css({'width': '240px'});
            }
        } else {
            card.addClass('mc-active');
            div.removeClass('col-md-3')
               .addClass('col-md-9');
            $("html, body").animate({scrollTop: div.offset().top - 100}, 500);
            window.setTimeout(function() {
                icon
                    .removeClass('fa-bars')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-arrow-left');
            }, 800);
            var c = 0;
            desc.children('h4').each(function() {
              c = c + $(this).height();
            });
            c = c + 263 + desc.children('ul#contacts').height();
            content.css({'height': c});
            card.css({'height': c});
            if($(window).width() < 480) {
              card.css({'width': '100%'});
            }
        }
    });
    if($(window).width() <= 800) {
      $('#sidebar').addClass('hidden');
    }
});
var a = ["Red", "Blue-Grey", "Pink", "Purple", "Deep-Purple", "Indigo", "Blue", "Light-Blue", "Cyan", "Teal", "Green", "Light-Green", "Lime", "Yellow", "Amber", "Orange", "Deep-Orange", "Brown", "Grey"];
var i = 0;
$('article.material-card').each(function() {
  $(this).addClass(a[i++]);
  if(i == a.length)
    i = 0;
});
$('.filter').on('click', function() {
  var attr = $(this).attr('data-filter');
  $('article.material-card').each(function() {
    if(attr == "all")
      $(this).parent('.sss').removeClass('hidden');
    else if($(this).hasClass(attr))
      $(this).parent('.sss').removeClass('hidden');
    else
      $(this).parent('.sss').addClass('hidden');
  });
  $('#sidebar ul li').each(function() {
    $(this).removeClass('active');
  });
  $(this).parent('li').addClass('active');
});
$("nav").css({"background-color": "#4B585E"});
</script>
@endsection
