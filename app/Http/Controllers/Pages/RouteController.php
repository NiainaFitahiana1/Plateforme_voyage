<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function descript(){
        return view("welcome.description");
    }
}
