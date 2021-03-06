@extends('layouts.app')

@section('content')
    <div class="text-center ">
        <div class=" inline-block px-12 py-6 border border-gray-400">
            <form method="POST" action="{{ route('updateCity', $city->id ) }}">
                @csrf
                @method('PUT')
                <input class="border px-2 py-2 rounded-lg mb-2 w-full" type="text" name="city" value="{{ $city->city }}">
                <button class="block bg-blue-800 px-2 py-2 w-full rounded-lg text-white mb-1">Edit</button>
                <a href="/admin" class="block bg-red-600 px-2 py-2 w-full rounded-lg text-white">Cancel</a>
            </form>
        </div>
    </div>
@endsection