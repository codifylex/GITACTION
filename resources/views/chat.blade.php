<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-lg">
                <div class="text-black-900">
                    <div class="flex">
                        <div class="w-1/3" style="background-color: red; height:75vh">@livewire('chat.service')</div>
                        <div class="w-2/3" style="background-color: blue; height:75vh">@livewire('chat.box')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>