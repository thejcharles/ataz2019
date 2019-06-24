<?php

namespace App\Controllers;


class ProductsController extends BaseController

{
    public function show(){

        return view('home/products');
    }
}