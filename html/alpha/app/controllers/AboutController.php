<?php


namespace App\Controllers;


class AboutController  extends BaseController
{
    public function show(){
        return view('home/about');
    }
}