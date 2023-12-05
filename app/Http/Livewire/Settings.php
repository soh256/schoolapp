<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SchoolYears;

class Settings extends Component
{
    use WithPagination;
    public $recherche ='';
    public function ChangeStatut($id,$statut){
        $sql = SchoolYears::where('Active','1')->update(['Active'=>'0']);
        if ($statut) {
            $sql2 = SchoolYears::where('id', $id)->update(['Active'=>'0']);
            $this->render();
        } else {
            $sql2 = SchoolYears::where('id', $id)->update(['Active'=>'1']);
            $this->render();    
        }
        
    }
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
