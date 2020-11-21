@extends('layouts.app')

@section('content')
<div class="px-3">
    <div class="py-4">
        <h1 class="text-2xl">Pharmacy Name</h1>
        <div class="flex justify-between mt-2">
            <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->name }}</h3>
            <a href="#" class="px-1 py-1 rounded-lg bg-blue-500 shadow">
            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            </a>
        </div>
    </div>
    <hr>
    <div class="py-4">
        <h1 class="text-2xl">Pharmacy Email</h1>
        <div class="flex justify-between mt-2">
            <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->email }}</h3>
            <a href="#" class="px-1 py-1 rounded-lg bg-blue-500 shadow">
            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            </a>
        </div>
    </div>
    <hr>
    <div class="py-4">
        <h1 class="text-2xl">Pharmacy Location</h1>
        <div class="flex justify-between mt-2">
            <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->location }}</h3>
            <a href="#" class="px-1 py-1 rounded-lg bg-blue-500 shadow">
            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            </a>
        </div>
    </div>
    <hr>
    <div class="py-4">
        <h1 class="text-2xl">Pharmacy City</h1>
        <div class="flex justify-between mt-2">
            <h3 class="inline-block text-xl text-gray-600">{{ Auth::user()->city->city }}</h3>
            <a href="#" class="px-1 py-1 rounded-lg bg-blue-500 shadow">
            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            </a>
        </div>
    </div>
    <hr>
    <div class="py-4">
        <h1 class="text-2xl">Pharmacy Password</h1>
        <div class="flex justify-between mt-2">
            <input type="password" value="{{ Auth::user()->password }}">
            <a href="#" class="px-1 py-1 rounded-lg bg-blue-500 shadow">
            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
            </a>
        </div>
    </div>
    <hr>
</div>   
@endsection