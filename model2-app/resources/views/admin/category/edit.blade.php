<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ url('/dashboard/'.$category->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="-mx-3 flex flex-1 justify-start">
                        <a href="{{ url('/dashboard') }}"
                            class="bg-black text-white py-4 px-8 border border-white rounded">
                            Back
                        </a>
                        <div class="-mx-3 flex flex-1 justify-end">
                            <button type="submit" class="bg-black text-white py-4 px-8 border border-white rounded">
                                Save
                            </button>
                        </div>
                    </div>
                    <input type="text" id="subject" placeholder="NAME" value="{{ $category->name }}"
                        class="mb-2 w-full border border-black py-2 pl-2 pr-4 shadow-md  sm:mb-0" name="name">

                    <input type="text" id="subject" placeholder="SLUG" value="{{ $category->slug }}"
                        class="mb-2 w-full border border-black py-2 pl-2 pr-4 shadow-md  sm:mb-0" name="slug">
                </form>
            </div>
        </div>
</x-app-layout>
