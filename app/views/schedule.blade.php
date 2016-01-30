<div id="schedule">
  <button data-toggle="modal" data-target="#openSch">
    <ul>
      <li>S</li>
      <li>C</li>
      <li>H</li>
      <li>E</li>
      <li>D</li>
      <li>U</li>
      <li>L</li>
      <li>E</li>
    </ul>
  </button>
</div>
<div id="openSch" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Schedule</h4>
      </div>
      <div class="modal-body">
        <section>
            <div class="">
                <div class="collapse-card">
                    <div class="title">
                        <i class="fa fa-play-circle fa-2x fa-fw"></i>
                        <span></span>
                        <h4><strong>Day 1</strong></h4>
                    </div>
                    <div class="body table-responsive">
                        @include('layouts/day1')
                    </div>
                </div>
                <div class="collapse-card">
                    <div class="title">
                        <i class="fa fa-play-circle fa-2x fa-fw"></i>
                        <span></span>
                        <h4><strong>Day 2</strong></h4>
                    </div>
                    <div class="body table-responsive">
                        @include('layouts/day2')
                    </div>
                </div>
                <div class="collapse-card">
                    <div class="title">
                        <i class="fa fa-play-circle fa-2x fa-fw"></i>
                        <span></span>
                        <h4><strong>Day 3</strong></h4>
                    </div>
                    <div class="body table-responsive">
                        @include('layouts/day3')
                    </div>
                </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>
