<?php
class EventsController extends BaseController {
  public $restful = true;
  public function authenticate() {
    if(strcmp(Input::get('username'), 'iamadmin')) {
      return Redirect::to('admin/login')
        ->with('isErr', true)
        ->with('msg', 'Username entered is wrong.');
    }
    if(strcmp(Input::get('passwd'), 'nitteadminan16')) {
      return Redirect::to('admin/login')
        ->with('isErr', true)
        ->with('msg', 'Password entered is wrong.');
    }
    Session::put('in', 'gautepJ9');
    return Redirect::to('admin/eventEntry')
      ->with('isErr', false)
      ->with('msg', 'Successfully logged in.');
  }
  public function viewAll() {
    if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9'))
      return View::make('events.all_events')->with('events', Events::all());
    return Redirect::to('admin/login')
      ->with('isErr', true)
      ->with('msg', 'You need to login first.');
  }
  public function enter() {
    if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9'))
      return View::make('events.event_entry');
    return Redirect::to('admin/login')
      ->with('isErr', true)
      ->with('msg', 'You need to login first.');

  }
  public function eventEntered() {
    $event = Events::create(array(
      'evName' => Input::get('evName'),
      'evIntro' => Input::get('evIntro'),
      'evRules' => Input::get('evRules'),
      'evCat' => Input::get('evCat')
    ));
    $phone = Input::get('phone');
    foreach(Input::get('name') as $key => $name) {
      if(strlen($name) > 0) {
        $organizer = new Organizer;
        $organizer->name = $name;
        if(strlen($phone[$key]) > 0)
          $organizer->phone = $phone[$key];
        $organizer->evId = $event->evId;
        $organizer->save();
      }
    }
    return Redirect::to('admin/eventEntry')
    ->with('isErr', false)
    ->with('msg', 'Successfully inserted event.');
	}
  public function eventModify() {
    $evId = Input::get('evId');
		Events::where('evId', $evId)->update(array(
			'evName' => Input::get('evName'),
			'evIntro' => Input::get('evIntro'),
			'evRules' => Input::get('evRules'),
			'evCat' => Input::get('evCat')
		));
    $phone = Input::get('phone');
    $k = Organizer::where('evId', $evId);
    if($k)
      $k->delete();
    foreach(Input::get('name') as $key => $name) {
      if(strlen($name) > 0) {
        $organizer = new Organizer;
        $organizer->name = $name;
        if(strlen($phone[$key]) > 0)
          $organizer->phone = $phone[$key];
        $organizer->evId = $evId;
        $organizer->save();
      }
    }
		return Redirect::to('admin/event/' . $evId)
    ->with('isErr', false)
    ->with('msg', 'Successfully updated event.');
	}
  public function getEvent($id) {
    if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9'))
      return View::make('events.eventDisplay')->with('entries', Events::find($id));
    return Redirect::to('admin/login')
      ->with('isErr', true)
      ->with('msg', 'You need to login first.');
	}
}
