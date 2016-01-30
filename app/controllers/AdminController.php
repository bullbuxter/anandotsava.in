<?php
class AdminController extends BaseController {
	public $restful = true;
	public function index() {
		if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9')) {
			Return Redirect::to('admin/eventEntry');
    }
		Return Redirect::to('admin/login');
	}
  public function login() {
    Session::pull('in');
    Return View::make('admins.login');
  }
  public function addColleges() {
    if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9')) {
			Return View::make('admins.addCollege');
    }
		Return View::make('admins.login');
  }
	public function addCollege() {
    if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9')) {
			$college = CollDetails::create(array(
	      'name' => Input::get('name'),
	      'place' => Input::get('place'),
	      'caName' => Input::get('caName'),
	      'caPhone' => Input::get('caPhone')
	    ));
			return Redirect::to('admin/college/' . $college->id);
    }
		return View::make('admins.login');
  }
  public function allColleges() {
    if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9')) {
      return View::make('admins.allColleges')->with('colleges', CollDetails::all());
    }
    return Redirect::to('admin/login')
      ->with('isErr', true)
      ->with('msg', 'You need to login first.');
  }
  public function getCollege($id) {
    if(Session::has('in') && !strcmp(Session::get('in'), 'gautepJ9'))
      return View::make('admins.onecollege')->with('college', CollDetails::find($id));
    return Redirect::to('admin/login')
      ->with('isErr', true)
      ->with('msg', 'You need to login first.');
  }
}
