<!-- filepath: resources/views/admin/particulars/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Particular') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('admin.particulars.update',$particular->id) }}">
                        @csrf
                        @method('PATCH')

                        <!-- Title -->
                        <div>
                            <x-label for="" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $particular->title)" required autofocus />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />
                            <textarea id="description" class="block mt-1 w-full" name="description">{{ old('description', $particular->description) }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4 ">
                            <x-button class="ml-4 ">
                                {{ __('Modifier') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>