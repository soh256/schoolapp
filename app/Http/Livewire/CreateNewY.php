<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SchoolYear;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class CreateNewY extends Component
{
    public $libelle;
    
    public function save_Year(SchoolYear $school_years){
        $this->validate([
            'libelle' => 'String|required|unique:school_years,School_year'
        ]);
        // dd($this->libelle);
        try {
            //test pour l'enregistrement de l'année
        $current_Year = Carbon::now()->format('Y');
        $tchek = schoolYear::where('current_year', $current_Year)->get();
        $existe = $tchek->count();
        
        if($existe > 1){
            return redirect()->back()->with('error', 'l\'année existe déjà!!');
        }else{
            $school_years->School_year = $this->libelle;
            $school_years->current_year = $current_Year;
            $school_years->save();
            if ($school_years) {
                $libelle = "";
            }
            return redirect()->back()->with('succes','l\'année à bien été ajoutée');
           } 
        } catch (Exception $e) {
                //code qui s'effectue si l'enregistrement ne marche pas
            }
        
        
    }
    public function render()
    {
        return view('livewire.create-new-y');
    }
}
