<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function store_testing(Request $request){

        dd($request->all());
    }
}
