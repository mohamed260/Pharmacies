<div class="md:mx-20">
    
    <div class="border mx-2 px-2 py-3 rounded shadow bg-gray-200">
        <div class="">
            <select class="border py-1 rounded-lg shadow focus:outline-none" wire:model="city">
                <option value="all">All</option>
                @foreach ($cities as $city)
                <option value="{{ $city->city }}">{{ $city->city }}</option>
                @endforeach
            
            </select>
            <input class="px-2 py-1 border rounded-lg shadow focus:outline-none" wire:model="search" placeholder="Enter Your Medicine" type="search">

            <button class="bg-blue-600 text-white py-1 px-2 rounded-lg shadow" wire:click="sub">Search</button>
        </div>
        <div class="mt-4">
            <table class="table border w-full shadow bg-gray-200 rounded">
                <tr class="bg-gray-700 text-white shadow">
                    <td class="pl-2">Medicine Name</td>
                    <td class="pl-2">Pharmacy Name</td>
                    <td class="pl-2">Location</td>
                    <td class="pl-2">City</td>
                </tr>
                
                @foreach ($medicines as $medicine)
                <tr>
                    <td class="pl-2">{{$medicine->name}}</td>
                    <td class="pl-2">{{$medicine->user->name}}</td>
                    <td class="pl-2">{{$medicine->user->location}}</td>
                    <td class="pl-2">{{$medicine->user->city->city}}</td>
                </tr>
                
                @endforeach
                
            </table>
        </div>
    </div>
</div>
