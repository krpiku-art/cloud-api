<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function joinUs(Request $request){
        return view('join-us');
    }
}
