<?php


namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class ResourcesController extends BaseController
{
  public function show()
  {
    $resources = Capsule::table('kiosk')->get();
    return view('home/resources', ['resources' => $resources]);
  }
}
