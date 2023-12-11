<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\level;
use App\Models\SchoolYears;


class CreateLevel extends Component
{
    public $code;
    public $libelle;
    public $Scolarité;

    public function Savelevel(level $levels){
        
        $this->validate([
            'code'=>'String|required',
            'libelle'=>'String|required',
            'Scolarité'=>'int|required'
        ]);

        try{

            $yearsActive = SchoolYears::where('Active', '1')->first();

            $levels->Code = $this->code;
            $levels->Libelle = $this->libelle;
            $levels->Scolarité = $this->Scolarité; 
            $levels->School_year_id = $yearsActive->id; 
            
            $levels->save();

            if ($levels){
                $this->code = '';
                $this->libelle = '';
                $this->Scolarité = '';
                return redirect()->route('niveau')->with('success','le niveau à bien été ajouté');
            }
            
        }catch(Exception $e){
            return redirect()->back()->with('erreur','l\'année scolaire n\'à pas été ajouté ');
        }
    }
    public function render()
    {
        

        return view('livewire.create-level');
    }
}
