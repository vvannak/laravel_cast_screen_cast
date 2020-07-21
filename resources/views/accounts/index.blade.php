@extends('layouts.app')
@section('content') 
<div class="flex">
    <div class="lg:w-1/5 bg-white shadow rounded px-8 pt-6 pb-8 mb-4 mr-4">
        @include('partials._sidebar-link')
    </div>
    <div class="lg:flex-1">
    <div class="w-full">
  <form class="bg-white shadow rounded px-8 pt-6 pb-8 mb-4" method="PPOST" action="/accounts">
      @csrf
      @method('PATCH')
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Name
      </label>
      <input  name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" value="{{ auth()->user()->name }}">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Email
      </label>
      <input  name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email Address" value="{{ auth()->user()->email }}">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Confirm Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password" placeholder="******************">
      <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Profile
      </label>
      <input class="shadow appearance-none border py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="profile" type="file">
    </div>
    <div class="flex items-center">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        <p class="text-sm">Update</p>
      </button>
      <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2" type="button">
        <p class="text-sm">Cancel</p>
      </button>
    </div>
  </form>
</div>
    </div>
</div>
@endsection 