<?php

namespace App\Controllers;

use App\classes\Request;
use App\classes\Session;
use Illuminate\Database\Capsule\Manager as Capsule;

class IndexController extends BaseController

{
  public function show()
  {
    Session::add('admin', 'You are welcome admin user');
    // Session::remove('admin');

    if (Session::has('admin')) {
      $msg = Session::get('admin');
    } else {
      $msg = 'Not defined';
    }
    $events = Capsule::table('trainings')->get();
    $staff = Capsule::table('staff')->where('active', '=', 1)->get();
    return view('home/home', ['admin' => $msg, 'events' => $events, 'staff' => $staff]);
  }

  public function get()
  {
    $request = Request::all(true);
    var_dump($request['file']);

  }

}
