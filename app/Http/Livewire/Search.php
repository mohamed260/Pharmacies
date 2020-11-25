<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
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
    public $message = "Not Found";


    public function render()
    {
        $message = $this->message;
        $city = $this->city;
        $search = '%'. $this->search . '%';
        $this->users = User::all();
        $this->cities = City::all();
        if ($this->city === 'all'){
            $this->medicines = Medicine::where('name', 'like', $search)->get();
        }else{
            $this->medicines = Medicine::where('name', 'like', $search)
            ->whereHas('user.city', function (Builder $quiry) use($city){
                $quiry->where('city', $city);
            })->get();
        }

        
        return view('livewire.search');
    }

    
}
