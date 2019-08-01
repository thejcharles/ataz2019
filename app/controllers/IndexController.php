<?php

namespace App\Controllers;
use App\Classes\Mail;
use App\Classes\Request;
use App\Classes\Session;
use Illuminate\Database\Capsule\Manager as Capsule;

class IndexController extends BaseController

{
    public function show()
    {
        Session::add('admin', 'You are welcome admin user');
       // Session::remove('admin');

        if(Session::has('admin'))
        {
            $msg = Session::get('admin');
        }else{
            $msg = 'Not defined';
        }
      $event = Capsule::table('trainings')->get();
      $events = json_encode(['events' =>$event]);
        return view('home/home', ['admin' => $msg, 'events'=> $events]);
    }

    public function get()
    {
       $request = Request::all(true);
       var_dump($request['file']);

    }
}
