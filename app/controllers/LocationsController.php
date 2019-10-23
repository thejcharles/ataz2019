<?php


namespace App\Controllers;

use App\Classes\Redirect;
use Illuminate\Database\Capsule\Manager as Capsule;

class LocationsController extends BaseController
{

  private $locations;
  private $counties;

  public function __construct()
  {
    $this->locations = Capsule::table('onestops')->get();
    $this->counties = Capsule::table('county')->get();
  }

  public function show()
  {
    return view('home/wioa-locations', ['locations' => $this->locations, 'counties' =>$this->counties]);
  }


  public function location($id)
  {

    $location = Capsule::table('onestops')->where('id', $id)->first();
    $accommodations = Capsule::table('accommodations')->where('location_id', $id)->get();
    $at_category = [
      'bvi' => Capsule::table('accommodations')->where('location_id', $id)->where('bvi', 'BVI')->get(),
      'dhh' => Capsule::table('accommodations')->where('location_id', $id)->where('dhh', 'DHH')->get(),
      'ergo' => Capsule::table('accommodations')->where('location_id', $id)->where('ergo', 'ERGO')->get(),
      'ld' => Capsule::table('accommodations')->where('location_id', $id)->where('ld', 'LD')->get(),
    ];

    if ($location !== null) {
      return view('home/wioa-center', ['location' => $location, 'accommodations' => $accommodations, 'at_category' => $at_category]);
    }

    return view('home/wioa-locations', ['locations' => $this->locations, 'counties' =>$this->counties]);
  }
}

