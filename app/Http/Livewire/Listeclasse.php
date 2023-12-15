<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Classe;
use App\Models\level;


class Listeclasse extends Component
{
    use WithPagination;
    public $recherche = '';
    

    public function delete(Classe $classe){
        $classe->delete();
        return redirect()->route('classe')->with('attention','le classe à bien été supprimer');
    }
    public function getniveau($id){

        $niveau = level::where('id', $id)->first();
        $libelle = $niveau->Libelle; 
         return $libelle;

    }
    public function render()
    {
        
        
        
        if (!empty($this->recherche)  ) {

            $classe = classe::where('Libelle','like','%'.$this->recherche.'%')
            ->paginate(10);
        }else {

            $classe = classe::paginate(10);
        
        }
        return view('livewire.listeclasse', compact('classe'));
    }
}
