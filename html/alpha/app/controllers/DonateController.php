<?php

namespace App\Controllers;


class DonateController extends BaseController
{
    public function show(){
        return view('home/donate');
    }
}