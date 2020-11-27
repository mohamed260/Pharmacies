<div class="md:px-20">
    <div class="border mx-2 px-2 py-2 bg-gray-200 shadow rounded">
        <div class="mb-4 md:px-2">
            @if ( session()->has('message'))
                <p class="alert alert-success">
                    {{session('message')}}
                </p>
            @endif
            <div>
                <h1 class=" text-2xl mb-4">Add New Medicine</h1>
                <input class=" focus:outline-none border px-2 py-2 rounded-lg w-3/5" placeholder="Add New Medicine" wire:model="create" type="text">
                <button class="w-1/5 focus:outline-none px-2 py-2 text-white bg-green-700 rounded-lg " wire:click.prevent="sub">Add</button>
            </div>
            
        </div>
        
        <div class="">
            <table class="table border">
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
</div>

