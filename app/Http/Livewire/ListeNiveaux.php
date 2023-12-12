<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\level;
use App\Models\SchoolYears; 

class ListeNiveaux extends Component
{ 
    use WithPagination;
    public $recherche = '';
    public $yearsA ;
    
    public function delete(level $level){
        $level->delete();
        return redirect()->route('niveau')->with('attention','le niveau à bien été supprimer');
    }
    public function render()
    {
        $yearsA = SchoolYears::where('Active', '1')->first();
        
            if (!empty($this->recherche)  && !is_null($yearsA)) {

                $levels = level::where('Libelle','like','%'.$this->recherche.'%')->orwhere('Code','like','%'.$this->recherche.'%')->where('School_year_id', $yearsA->id )->paginate(10);
            
            }else {

                if (!is_null($yearsA)) {

                    $levels = level::where('School_year_id', $yearsA->id)->paginate(10);

                } else {

                    $levels = [];

                } 
                
            }

            return view('livewire.liste-niveaux', compact('levels'));
    }
}
