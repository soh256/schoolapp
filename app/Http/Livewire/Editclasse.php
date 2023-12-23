<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\level;
use App\Models\classe;
use App\Models\SchoolYears;

class Editclasse extends Component
{
    public $classe;
    public $libelle;
    public $level_id;

    public function mount(){

        $this->libelle = $this->classe->libelle;
        
        $this->level_id = $this->classe->level_id;
    }
    public function editclasse(){
        $this->validate([
            'libelle' => 'String|required',
            'level_id' => 'int|required',

        ]);
        try {
            //modification de la classe

            $classe = Classe::find($this->classe->level_id);
            $classe->libelle = $this->libelle;
            $classe->level_id = $this->level_id;
            $classe->Save();
            return redirect()->route('classe')->with('success', 'la classe à bel et bien été modifier');

        } catch (Exception $e) {
            
            echo consol.log(''.$e);
            return redirect()->back()->with('erreur', 'echec de modification de la classe essayer encore!!!!');

        }
        

    }
    public function render()
    {
        $yearsActive = SchoolYears::where('Active', '1')->first();
        $currentlevel = level::where('School_year_id', $yearsActive->id)->get();
        // $currentlevel = level::find()->get();
        return view('livewire.editclasse', compact('currentlevel'));
    }
}
