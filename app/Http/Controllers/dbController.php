<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dbTest;

class dbController extends Controller
{
    //
    public function index(){
        $test = new dbTest();
        $test->save();
    }
}
