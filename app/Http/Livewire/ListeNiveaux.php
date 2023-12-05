<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\level;
use App\Models\SchoolYears;

class ListeNiveaux extends Component
{ 
    use WithPagination;
    public $recherche ='';
    public function render()
    {
            if (!empty($this->recherche)) {

                $yearsActive = SchoolYears::where('Active', '1')->first();
                
                    $levels = level::where('Libelle','like','%'.$this->recherche.'%'
                    )->orwhere('Code','like','%'.$this->recherche.'%'
                    )->orwhere('School_year_id', $yearsActive->id 
                    )->paginate(10);
                
            } else {
                $yearsActive = SchoolYears::where('Active', '1')->first();
                $levels = level::where('School_year_id', $yearsActive->id )->paginate(10);
            }

            return view('livewire.liste-niveaux', compact('levels'));
    }
}
