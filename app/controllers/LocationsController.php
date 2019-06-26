<?php


namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class LocationsController  extends BaseController
{
    public function show(){
        $locations = Capsule::table('onestops')->get();
        return view('home/wioa-locations', ['locations' => $locations]);
    }

    public function location($id){

        $location = Capsule::table('onestops')->where('id', $id)->first();
        $accommodations = Capsule::table('accommodations')->where('location_id', $id)->get();
        $at_category = [
          'bvi'=> Capsule::table('accommodations')->where('location_id', $id)->where('bvi', 'BVI')->get(),
          'dhh'=>  Capsule::table('accommodations')->where('location_id', $id)->where('dhh', 'DHH')->get(),
          'ergo'=>  Capsule::table('accommodations')->where('location_id', $id)->where('ergo', 'ERGO')->get(),
          'ld'=>  Capsule::table('accommodations')->where('location_id', $id)->where('ld', 'LD')->get(),
        ];

        if($location != null){
            return view('home/wioa-center', ['location'=> $location, 'accommodations'=> $accommodations, 'at_category'=>$at_category ]);
        } else {
            return view('errors/404');
        }

    }
}
