<?php

namespace App\Controllers;


class LoginController extends BaseController

{
    public function show(){

        return view('home/login');
    }
}