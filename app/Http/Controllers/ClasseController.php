<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function create_classe(){

        return view ('classes.create');
    }

    public function index(){

        return view ('classes.index');

    }
}
