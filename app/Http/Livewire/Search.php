<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;
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

    use WithPagination;

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

        // if ($this->city === 'all'){
        //     $this->medicines = Medicine::where('name', 'like', $search)
        //     ->whereHas('user.city', function (Builder $quiry) use($city){
        //         $quiry->where('city', $city);
        //     })->get();
        // }
            // $this->medicines = Medicine::where('name', 'like', $search)->get();
            

        
        return view('livewire.search');
    }

    public function sub()
    {
        $search = '%'. $this->search . '%';
        $this->medicines = Medicine::where('name', 'like', $search)->get();

        return view('livewire.search');
    }

    
}
