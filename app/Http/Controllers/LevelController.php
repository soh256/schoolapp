<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index(){
        return view ('niveaux.List');
    }
    public function create_level(){
        return view ('niveaux.Create');
    }
}
