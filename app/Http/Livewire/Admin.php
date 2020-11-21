<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\User;

class Admin extends Component
{
    public $cityName;
    public $cities;
    public $count;
    public $users;

    public function render()
    {
        $this->count = auth()->user()->count();
        $this->users = User::get();
        $this->cities = City::all();
        return view('livewire.admin');
    }

    public function addCity(){

        City::create([
            'city' => $this->cityName,
        ]);

        $this->cityName = "";
        Session()->flash('message','The City Was Adedd!');
    }

    public function counter(){
        
    }
}
