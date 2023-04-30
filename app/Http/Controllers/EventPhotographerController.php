<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventPhotographerController extends Controller
{
    public function index(){
        return view('cruds.event-photographer');
    }
    public function faceid(){
        return view('faceid.index');
    }
}
