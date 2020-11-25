@extends('layouts.app')

@section('content')

<div class="px-3">
    <form action="{{ route('updatePas', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="block text-lg">Old Password</label>
            <input class="border px-2 py-1 rounded" type="password" name="password">
        </div>
        <div>
            <button class="btn btn-success">Update</button>
        </div>       
    </form>
    {{-- {{ $pas->password }} --}}
</div>
    
@endsection