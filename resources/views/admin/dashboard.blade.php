<!-- resources/views/admin/dashboard.blade.php -->
<x-adminLayout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>{{ __('Welcome, Admin!') }}</h3>
                    <p>{{ __("Here you can manage the application's particulars.") }}</p>
                    <a href="{{ route('admin.particulars.index') }}" class="text-blue-500 hover:underline">
                        {{ __('Manage Particulars') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-adminlayout>