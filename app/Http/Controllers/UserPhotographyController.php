<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPhotographyController extends Controller
{
    public function index()
    {
        return view('purchase.purchase-index');
    }
}
