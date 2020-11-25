@extends('layouts.app')

@section('content')
    <div class="px-3">
        <div>
        <form action="{{ route('updateProfile', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <div class="py-4">
                        <label class="text-xl">Your Name</label>
                        <input class="border px-2 py-1 rounded-lg w-full" type="text" name="name" value="{{ $user->name }}">
                    </div>
                    <hr>
                    <div class="py-4">
                        <label class="text-xl">Your Email</label>
                        <input class="border px-2 py-1 rounded-lg w-full" type="email" name="email" value="{{ $user->email }}">
                    </div>
                    <hr>
                    <div class="py-4">
                        <label class="text-xl">Your Location</label>
                        <input class="border px-2 py-1 rounded-lg w-full" type="text" name="location" value="{{ $user->location }}">
                    </div>
                    <hr>
                    <div class="py-4">
                        <label class="text-xl">Your City</label>
                        <select class="border px-2 py-1 rounded-lg w-full" name="city_id">
                        <option value="{{ $user->city->id }}">{{ $user->city->city }}</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city }}</option>
                        @endforeach
                        </select>
                    </div>
                    <hr>
                    {{-- <div class="py-4">
                        <label class="text-xl">Your Password</label>
                        <input class="border px-2 py-1 rounded-lg w-full" type="password" name="password" value="{{ $user->password }}">
                    </div>
                    <hr> --}}

                    <div class="py-4">
                        <button class="btn btn-success w-full">Update</button>
                        <a class="btn btn-danger block w-full mt-2" href="/profile">Cancle</a>
                    </div>
                    

                </div>
                
                
                
            </form> 
        </div>
    </div>
    
        
@endsection