<div class="mx-6 md:flex">
    <div class="mb-4 md:px-2 md:w-1/2">
        @if ( session()->has('message'))
            <p class="alert alert-success">
                {{session('message')}}
            </p>
        @endif
        <div>
            <h1 class=" text-2xl mb-4">Add New Medicine</h1>
            <input class="border px-2 py-2 rounded-lg w-3/5 md:w-full md:mb-2" placeholder="Add New Medicine" wire:model="create" type="text">
            <button class="w-1/5 px-2 py-2 text-white font-bold bg-blue-800 rounded-lg md:block md:w-full" wire:click.prevent="sub">Submit</button>
        </div>
        
    </div>
    
    <div class="md:w-1/2">
        <table class="table">
            <tr class="bg-gray-600 text-white">
                <td>Medicine Name</td>
                <td>#</td>
            </tr>

            @foreach ($medicines as $medicine)
                <tr>
                    <td>{{$medicine->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('edit', $medicine->id) }}">Edit</a>
                        <form class="inline-block" action="{{ route('delete', $medicine->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</div>
