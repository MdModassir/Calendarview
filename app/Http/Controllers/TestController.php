<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function indexz(){
        return view('admin.systemdata.index');
    }
}
