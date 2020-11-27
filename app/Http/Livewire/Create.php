<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Medicine;

class Create extends Component
{
    public $create;
    public $medicines;
    public $searchMedicine;

    public function render()
    {
        $this->medicines = auth()->user()->medicine()->latest()->get();
        return view('livewire.create');
    }
    
    public function sub(){
        
        auth()->user()->medicine()->create([
            
            'name' => $this->create,
        ]);

        $this->create = "";
        Session()->flash('message', 'The medicine was added succussfuly!');
    }

    
}
