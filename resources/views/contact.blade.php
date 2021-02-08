@extends('layouts.default')

<!-- Banner -->
@include('partials.banner')

<!-- Navbar -->
@include('partials.navbar')


<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
</div>


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="width: 500px; display: flex; justify-content: center; align-items: center; margin-right: 50px; margin-left: 50px; z-index: 99999" class="text-white px-6 py-4 border-0 rounded relative m-5 bg-red-500">
          <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell" />
          </span>
            <span class="inline-block align-middle mr-8">
              {{ $error }}
          </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                <span>×</span>
            </button>
        </div>
    @endforeach
@endif

@if (session('status'))
    <div style="width: 500px; display: flex; justify-content: center; align-items: center; margin-right: 50px; margin-left: 50px; z-index: 99999" class="text-white px-6 py-4 border-0 rounded relative m-5 bg-green-500">
          <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell" />
          </span>
        <span class="inline-block align-middle mr-8">
        {{ session('status') }}
          </span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
@endif

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="" method="POST">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" id="first_name" placeholder="Votre prénom" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Nom</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name" placeholder="Votre nom" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email </label>
                                <input type="text" placeholder="Votre email" value="{{ old('email') }}" name="email" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea placeholder="Votre message" name="message" id="message" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('message') }}</textarea>
                            </div>

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
