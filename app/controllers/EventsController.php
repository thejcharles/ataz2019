<?php


namespace App\Controllers;


use Illuminate\Database\Capsule\Manager as Capsule;

class EventsController extends BaseController
{
  public function show()
  {
    $events = Capsule::table('trainings')->get();
    //echo json_encode(['events' =>$events]);
    if ($events) {
      return view('home/trainings', ['trainings' => $events]);
    }

    return view('errors/404');

  }
}

{

}
