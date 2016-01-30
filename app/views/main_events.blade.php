<script src="public/js/modernizr.custom.79639.js"></script>
<div class="container demo-1">
<div id="slider" class="sl-slider-wrapper">
  <div class="sl-slider">
    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
      <div class="sl-slide-inner">
        <div class="deco">
          <img src="public/img/main_events/BOTB.jpg" alt="" />
        </div>
        <h2>Battle of the Bands</h2>
        <blockquote>
          <p>A Golden Opportunity awaits all the tremendous bands in Karnataka to take away the title of- Battle of the Bands 4.0.
We all have been inspired by the battles fought by our super heroes in the comic world. Here is a chance to fight a similar battle against the best of enemies to inspire the people of Nitte by their beats. For the true connoisseur of music or people just looking for &rsquo;Anand&rsquo;,
prepare yourself to have the time of your lives this Anandotsava '16!!</p>
          <cite></cite>
        </blockquote>
      </div>
    </div>
    <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
      <div class="sl-slide-inner">
        <div class="deco">
          <img src="public/img/main_events/fashion_show.jpg" alt="" />
        </div>
        <h2>Fashion Show</h2>
        <blockquote>
          <p>Ever wondered what it might feel like to walk in Adriana Lima&rsquo;s shoes? Ever felt the need to thrill audiences like Heidi Klum would? Here&rsquo;s your chance to light up the ramp. Walk your way to glory this February at Anandotsava&rsquo;16.</p>
          <cite></cite>
        </blockquote>
      </div>
    </div>
    <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
      <div class="sl-slide-inner">
        <div class="deco">
          <img src="public/img/main_events/group_dance.jpg" alt="" />
        </div>
        <h2>Group Dance</h2>
        <blockquote>
          <p>Dancing is the loftiest, the most moving and beautiful of the arts. It&rsquo;s not a mere translation of life but life itself.</p>
		<cite></cite>
        </blockquote>
      </div>
    </div>
    <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
      <div class="sl-slide-inner">
        <div class="deco">
          <img src="public/img/main_events/JAM.jpg" alt="" />
        </div>
        <h2>Just a Minute</h2>
        <blockquote>
          <p>How long does it take for you to glance through your favorite comic every day? Not much more than a minute, right? Now, take a minute of that time and put your quick thinking and critical reasoning skills to the test at the JAM during this year&rsquo;s Anandotsava. Remember, every second counts!
</p>
          <cite></cite>
        </blockquote>
      </div>
    </div>
  </div>
  <nav id="nav-arrows" class="nav-arrows">
    <span class="nav-arrow-prev">Previous</span>
    <span class="nav-arrow-next">Next</span>
  </nav>
</div>
</div>
<script type="text/javascript" src="public/js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="public/js/jquery.slitslider.js"></script>
<script type="text/javascript">
  $(function() {
    var Page = (function() {
      var $navArrows = $( '#nav-arrows' ),
        $nav = $( '#nav-dots > span' ),
        slitslider = $( '#slider' ).slitslider( {
          onBeforeChange : function( slide, pos ) {
            $nav.removeClass( 'nav-dot-current' );
            $nav.eq( pos ).addClass( 'nav-dot-current' );
          }
        } ),
        init = function() {
          initEvents();
        },
        initEvents = function() {
          $navArrows.children( ':last' ).on( 'click', function() {
            slitslider.next();
            return false;
          } );
          $navArrows.children( ':first' ).on( 'click', function() {
            slitslider.previous();
            return false;
          } );
          $nav.each( function( i ) {
            $( this ).on( 'click', function( event ) {
              var $dot = $( this );
              if( !slitslider.isActive() ) {
                $nav.removeClass( 'nav-dot-current' );
                $dot.addClass( 'nav-dot-current' );
              }
              slitslider.jump( i + 1 );
              return false;
            } );
          } );
        };
        return { init : init };
    })();
    Page.init();
  });
</script>
