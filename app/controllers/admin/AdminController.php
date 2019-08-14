<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
  public function show()
  {

    return view('admin/admin-home');
  }
}
