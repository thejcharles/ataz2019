<?php

namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;


class StaffController extends BaseController

{
    public function show(){
        $staff = Capsule::table('staff')->get();
        $director = Capsule::table('staff')->where('rank', '=', 'director')->first();
        $at_director = Capsule::table('staff')->where('rank', '=', 'at-director')->first();

        return view('home/staff', ['staff' =>$staff, 'director' =>$director, 'at_director' =>$at_director]);
    }

    public function profile($id){

        $staff = Capsule::table('staff')->where('id', $id)->first();
        if($staff != null){
            return view('home/staff-profile', ['staff'=> $staff]);
        } else {
            return view('errors/404');
        }

    }
}