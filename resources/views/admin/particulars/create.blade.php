<!-- filepath: resources/views/admin/particulars/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Particular') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('admin.particulars.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />
                            <textarea id="description" class="block mt-1 w-full" name="description">{{ old('description') }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>