@extends('layouts.app')
@section('content')
<div class=" my-40">
    <div class=" bg-gray-800 m-auto   p-10 rounded shadow-2xl w-96">
        <div class=" justify-center items-center m-auto">
            @if(session()->has('message'))
                <div class="bg-black text-yellow-500">
                    {{ session('message') }}
                </div>
            @endif
                @if(session()->has('error'))
                    <div class="bg-black text-red-600">
                        {{ session('error') }}
                    </div>
                @endif
            <form>
                @csrf
                <h1 class="text-center mb-5 text-4xl font-bold">Login Page</h1>
                <input type="email" wire:model="email" class="border border-black rounded w-full p-2"><br>
                <input type="password" wire:model="password" class="border border-black rounded w-full p-2">
                <button wire:click.prevent="onLogin" class="bg-white text-black p-3 m-auto flex">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
