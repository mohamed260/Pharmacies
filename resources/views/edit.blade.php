@extends('layouts.app')

@section('content')
    <div class="md:px-20 lg:px-32">
        <div class=" mx-3 px-4 py-6 border border-gray-400">
            <form method="POST" action="{{ route('update', $medicine->id ) }}">
                @csrf
                @method('PUT')
                <input class="border px-2 py-2 rounded-lg mb-2 w-full" type="text" name="name" value="{{ $medicine->name }}">
                <button class="block bg-blue-800 px-2 py-2 w-full rounded-lg text-white mb-1">Update</button>
                <a href="/create" class="block bg-red-600 px-2 py-2 w-full rounded-lg text-white text-center">Cancel</a>
            </form>
        </div>
    </div>
@endsection