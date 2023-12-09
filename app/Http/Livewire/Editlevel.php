<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Editlevel extends Component
{
    public $level;
    public $code;
    public $libelle;
    public $Scolarité;
    
    public function mount(){
        dd($level);
        /*$this->code = $this->level->code;
        $this->libelle = $this->level->libelle;
        $this->Scolarité = $this->level->Scolarité;*/
    }
    public function render()
    {
        return view('livewire.editlevel');
    }
}
