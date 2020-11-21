<div>
    
    <div class="px-2 md:flex">
        <div class="md:w-1/2 px-4">
            <select class="border py-1 rounded-lg shadow focus:outline-none" wire:model="city">
                <option value="0">all</option>
                @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->city }}</option>
                @endforeach
            
            </select>
            <input class="md:block md:my-2 md:w-full px-2 py-1 border rounded-lg shadow focus:outline-none" wire:model="search" placeholder="Enter Your Midicine" type="search">

            <button class="bg-blue-600 text-white py-1 px-2 rounded-lg shadow" wire:click="render">Search</button>
        </div>
        <div class="mt-4 md:w-1/2 px-4">
            <table class="table w-full">
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
