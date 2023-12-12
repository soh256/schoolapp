<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SchoolYears;
use App\Models\level;
use App\Models\Classe;


class Createclasse extends Component
{
    public $libelle;
    public $level_id;

    public function Saveclasse(Classe $classe){

        $this->validate([
            'libelle'=>'String|required',
            'level_id'=>'int|required'
        ]);
        try {
            
            $classe->libelle = $this->libelle;
            $classe->level_id = $this->level_id;
            $classe->Save();
            
            return redirect()->route('classe')->with('success', 'classe enregistré avec success');
        } catch (Exception $e) {
            
            return redirect()->back()->whith('erreur','classe non enregistrée');


        }

    }
    public function render()
    {
        $yearsActive = SchoolYears::where('Active', '1')->first();
        $currentlevel = level::where('School_year_id', $yearsActive->id)->get();

        return view('livewire.createclasse', compact('currentlevel'));
    }
}
