<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Ticket') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <form method="POST" action="{{route('ticket.store') }}">
                 @csrf

            <!-- Name -->
            <!-- <div>
                <x-label for="name" :value="__('Name')" />
            
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div> -->

            <!-- Email Address -->
            <!-- <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div> -->

            <!-- Password -->
            <!-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div> -->


            <!-- Confirm Password -->
            <!-- <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required />
            </div> -->

            
            <!-- Apply (or not) -->
            <!-- <div class="block mt-4">
                <label for="apply" class="inline-flex items-center">
                    <input id="apply" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="apply">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Apply') }}</span>
                </label>
            </div> -->


            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Make Ticket') }}
                </x-button>
            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
