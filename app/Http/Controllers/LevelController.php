<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\level;

class LevelController extends Controller
{
    public function index(){
        return view ('niveaux.List');
    }
    public function create_level(){
        return view ('niveaux.Create');
    }
    public function Modif_level(level $level){
        
        return view ('niveaux.Editlevel', compact('level'));
    }
}
