<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Carbon\Carbon;
use App\Models\SchoolYears;

class CreateYears extends Component
{
    public $libelle;
   

    public function SaveYear(Schoolyears $school_years){
        
        $this->validate([
            'libelle'=>'String|required'
        ]);

        try{
            $currentYears = Carbon::now()->format('Y');

            $test = $school_years::where('current_year', $currentYears)->get();
            $caexiste = $test->count();
            
            if ($caexiste >= 1){
                return redirect()->back()->with('erreur','l\'année scolaire en cour à déjà été ajouté');
            }
            else{
                $school_years->school_Year = $this->libelle;
                $school_years->current_Year = $currentYears;

                $school_years->save();

                if($school_years){
                    $this->libelle = '';
                }
            
                return redirect()->route('settings')->with('success','l\'année scolaire à été ajouté avec success');
            }
        }catch(Exception $e){
            return redirect()->back()->with('success','l\'année scolaire à été ajouté avec success');
        }
    }
    public function render()
    {
        return view('livewire.create-years');
    }
    
}
