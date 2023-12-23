<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;

class ClasseController extends Controller
{
    public function create_classe(){

        return view ('classes.create');
    }

    public function index(){

        return view ('classes.index');

    }
    public function Modif_classe(Classe $classe){
        
        return view ('classes.editclasse', compact('classe'));
        
    }
}
