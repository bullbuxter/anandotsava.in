<?php
class HomeController extends BaseController {
	public $restful = true;
  public function index() {
    return View::make('index')->with('link', 'home');
  }
  public function reg() {
    return View::make('register')->with('title', 'Register');
  }
  public function events() {
    return View::make('events')
      ->with('title', 'Events')
      ->with('link', 'events')
			->with('events', Events::all());
  }
  public function internals() {
    return view('internals.index');
  }
  
}
