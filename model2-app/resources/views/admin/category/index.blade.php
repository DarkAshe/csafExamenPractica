<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="-mx-3 flex flex-1 justify-end">
                    <a href="{{ url('/dashboard/create') }}"
                    class="bg-black text-white py-4 px-8 border border-white rounded">
                    Create
                </a>
                </div>
            </div>
            <livewire:admin.category.index />
        </div>
    </div>
</x-app-layout>
