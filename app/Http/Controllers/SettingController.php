<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('settings.SchoolYears');
    }
    public function create(){
        return view("settings.Create-Sy");
    }
}
