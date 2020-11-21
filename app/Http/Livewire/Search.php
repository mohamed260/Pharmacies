<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Medicine;
use App\Models\User;
use App\Models\City;

class Search extends Component
{
    public $search;
    public $medicines;
    public $users;
    public $cities;
    public $city;
    public $ids = User::class; 


    public function render()
    {
        $search = '%'. $this->search . '%';
        $this->users = User::all();
        $this->cities = City::all();
        // $ids = $this->ids->city_id;
        if ($this->city = "0"){
            $this->medicines = Medicine::where('name', 'like', $search)->get();
        }
        else{
            $this->medicines = Medicine::where('name', 'like', $search)
            ->where('user_id', '!=' , $this->city)
            ->get();
        }
        return view('livewire.search');
        
    }

    
}
