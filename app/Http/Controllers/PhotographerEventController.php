<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographerEventController extends Controller
{
    public function index(){
        return view('cruds.photographer-event');
    }
}
