<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\level;


class Editlevel extends Component
{
    public $level;
    public $code;
    public $libelle;
    public $Scolarité;

    public function back(){

        $this->reset();
        
        return redirect()->back();
        
    }
    
    public function mount(){
        $this->code = $this->level->Code;
        $this->libelle = $this->level->Libelle;
        $this->Scolarité = $this->level->Scolarité;
    }

    

    public function edit(){
        
        $this->validate([
            'code'=>'String|required',
            'libelle'=>'String|required',
            'Scolarité'=>'integer|required'
        ]);

        try{

            $levels = level::find($this->level->id);
            $levels->Code = $this->code;
            $levels->Libelle = $this->libelle;
            $levels->Scolarité = $this->Scolarité; 
            
            
            $levels->save();

            if ($levels){
                $this->code = '';
                $this->libelle = '';
                $this->Scolarité = '';
                return redirect()->route('niveau')->with('success','le niveau à bien été mise à jour');
            }
            
        }catch(Exception $e){
            return redirect()->back()->with('erreur','echec de mise à jour du niveau');
        }
    }
    
    public function render()
    {
        return view('livewire.editlevel');
    }
}
