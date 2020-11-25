@extends('layouts.app')

@section('content')
<div class="px-3 md:flex md:flex-wrap">
    @if (session()->has('message'))
        <p class="alert alert-success">
            {{ session('message') }}
        </p>
    @endif
    <div class="py-4 md:w-1/2 md:px-4">
        <h1 class="text-2xl">Pharmacy Name</h1>
        <div class="flex justify-between mt-2">
            <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->name }}</h3>
            
        </div>
    </div>
    <hr>
    <div class="py-4 md:w-1/2 md:px-4">
        <h1 class="text-2xl">Pharmacy Email</h1>
        <div class="flex justify-between mt-2">
            <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->email }}</h3>
            
        </div>
    </div>
    <hr>
    <div class="py-4 md:w-1/2 md:px-4">
        <h1 class="text-2xl">Pharmacy Location</h1>
        <div class="flex justify-between mt-2">
        <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->location }}</h3>
            
        </div>
    </div>
    <hr>
    <div class="py-4 md:w-1/2 md:px-4">
        <h1 class="text-2xl">Pharmacy City</h1>
        <div class="flex justify-between mt-2">
            <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->city->city }}</h3>
            
        </div>
    </div>
    <hr>
    {{-- <div class="py-4 md:w-1/2 md:px-4">
        <h1 class="text-2xl">Pharmacy Password</h1>
        <div class="flex justify-between mt-2">
        <input type="password" value="{{ Auth::user()->password }}">
           
        </div>
    </div>
    <hr> --}}
    <div class="py-4">
    <a class="btn btn-primary block w-full" href="{{ route('editProfile', Auth::user()->id) }}">
        Edit
    </a>
     
    </div>
</div>   
@endsection