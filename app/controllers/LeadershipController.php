<?php


namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class LeadershipController  extends BaseController
{
    public function show(){
        $leaders = Capsule::table('board_members')->get();
        return view('home/leadership', ['leaders' =>$leaders]);
    }
}