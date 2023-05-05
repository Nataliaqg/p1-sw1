<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaaSView extends Controller
{
    public function index(){
        return view('saas-view');
    }
}
