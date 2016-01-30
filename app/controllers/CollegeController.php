<?php
class CollegeController extends BaseController {
  public $restful = true;
  public function validate($field) {
    switch($field) {
      case 'coll': $row = CollCred::find(Input::get('id')); break;
      case 'fs': $row = FsCred::find(Input::get('id')); break;
      case 'botb': $row = BotbCred::find(Input::get('id')); break;
      default: $row = CollCred::find(Input::get('id')); break;
    }
    if(!$row)
      return Redirect::to('reg')
        ->with('err', [$field, 'id']);
    if(strcmp($row->passwd, md5(Input::get('passwd'))))
      return Redirect::to('reg')
        ->with('err', [$field, 'passwd']);
    Session::put('sense', [$field, $row->id]);
    return Redirect::to('member/' . $field);
  }
  public function member($field) {
    if(Session::has('sense')) {
      switch(Session::get('sense')[0]) {
        case 'coll': $data = CollDetails::find(Session::get('sense')[1]); break;
        case 'fs': $data = FsDetails::find(Session::get('sense')[1]); break;
        case 'botb': $data = BotbDetails::find(Session::get('sense')[1]); break;
        default: $data = CollDetails::find(Session::get('sense')[1]);
      }
      return View::make($field)
        ->with('title', 'Member')
        ->with('data', $data);
    }
    return Redirect::to('reg');
  }
  public function updateDetails() {
    if(Session::has('sense')) {
      $cId = Session::get('sense')[1];
      $tmp = Participant::where('cId', $cId);
      $phone = Input::get('pPhone');
      if($tmp)
        $tmp->delete();
      foreach(Input::get('pName') as $key => $name) {
        if(strlen($name) > 0) {
          $p = new Participant;
          $p->cId = $cId;
          $p->pid = $key + 1;
          $p->name = $name;
          if(strlen($phone[$key]) > 0)
            $p->phone = $phone[$key];
          $p->save();
        }
      }
      return Redirect::to('member/coll');
    }
    return Redirect::to('reg');
  }
  public function logout() {
    Session::pull('collId');
    return Redirect::to('reg');
  }
  public function evReg() {
    if(Session::has('sense')) {
      return View::make('eventsReg')
        ->with('title', 'Member')
        ->with('events', Events::all())
        ->with('college', CollDetails::find(Session::get('sense')[1]));
    }
    return Redirect::to('reg');
  }
}
