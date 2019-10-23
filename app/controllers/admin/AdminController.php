<?php


namespace App\Controllers\Admin;

use App\Classes\Redirect;
use App\Controllers\BaseController;
use App\Services\HttpClientService;
use Illuminate\Database\Capsule\Manager as Capsule;


class AdminController extends BaseController
{
  public $user =[];
function __construct()
{
  if (!isAuthenticated() ) {
    Redirect::to('/');
  }
  if(isset($_SESSION['SESSION_USER_ID'])) {
    $this->user = Capsule::table('users')->where('id', $_SESSION['SESSION_USER_ID'])->first();

  }
  else {
    Redirect::to('/');
  }
}

  public function show()
  {
    $http = new HttpClientService();
    print_r($http::CreateEvent('url string', 'body'));

    return view('admin/admin-home', ['user' => $this->user]);
  }

}
