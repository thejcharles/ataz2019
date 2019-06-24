<?php


namespace App\Controllers;


use Illuminate\Database\Capsule\Manager as Capsule;

class EventsController extends BaseController
{
    public function show(){
        $events = Capsule::table('events')->get();
        if($events){
            return view('home/events', ['events' =>$events]);
        }

        return view('errors/generic');

    }
}
{

}