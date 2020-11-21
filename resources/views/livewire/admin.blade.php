<div>
    <div class="px-3 md:flex">
        <div class="md:w-2/5 md:px-2">
            <div class="mb-4">
                @if (session()->has('message'))
                    <p class="alert alert-success">
                        {{ session('message') }}
                    </p>
                @endif
                <input class=" border px-2 py-1 rounded-lg w-3/5 shadow" placeholder="Add A City" wire:model="cityName" type="text">
                <button class=" bg-green-700 text-white px-2 w-1/5 py-1 rounded-lg shadow" wire:click.prevent="addCity">Add</button>
            </div>
            <div>
                <table class="table w-full">
                    <tr class=" bg-gray-600 shadow text-white">
                        <td>City Name</td>
                        <td>#</td>
                    </tr>

                    @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->city }}</td>
                        
                            <td>
                                <a class="btn btn-primary" href="{{ route('editCity', $city->id) }}">Edit</a>
                                <form class="inline-block" action="{{ route('deleteCity', $city->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>

        <div class="md:w-2/5 md:px-2">
            <div class="text-center mt-10 md:mt-2">
                <h1 class="text-2xl font-bold text-gray-600">The Parmacies Are <span class=" text-indigo-500">{{ $count }}</span></h1>
            </div>
            <div>
                <table class="table mt-2">
                    <tr class="bg-gray-600 shadow text-white">
                        <td>Pharmacy Name</td>
                        <td>Email</td>
                        <td>Location</td>
                        <td>City</td>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->location}}</td>
                        <td>{{$user->city->city}}</td>
                    </tr>    
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
