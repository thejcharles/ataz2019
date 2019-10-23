<?php


namespace App\Controllers;


use App\Models\County;
use Illuminate\Database\Capsule\Manager as Capsule;

class EventsController extends BaseController
{
  public function show()
  {
    $events = Capsule::table('trainings')->get()->sortByDesc('dates');
    //echo json_encode([]);
    if ($events) {
      return view('home/trainings', ['trainings' => $events]);
    }

    return view('errors/404');

  }
}

{

}
