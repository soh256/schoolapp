<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SchoolYears;

class Settings extends Component
{
    use WithPagination;
    public $recherche ='';

    public function render()
    {
        if (!empty($this->recherche)) {
            $schoolyears = SchoolYears::where('school_year','like','%'.$this->recherche.'%')->orwhere('current_year','like','%'.$this->recherche.'%')->paginate(15);
        } else {
            $schoolyears = SchoolYears::paginate(15);
        }
        
        
        return view('livewire.settings', compact('schoolyears'));
    }
}
