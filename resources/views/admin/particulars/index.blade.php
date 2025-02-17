<x-adminLayout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Particulars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('admin.particulars.create') }}" class="text-blue-500 hover:underline">
                        {{ __('Create New Particular') }}
                    </a>
                    <div class="overflow-x-auto mt-4">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Title') }}
                                    </th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                                        {{ __('Description') }}
                                    </th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($particulars as $particular)
                                    <tr class="border-t border-gray-200 dark:border-gray-700">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            {{ $particular->title }}
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap hidden md:table-cell">
                                            {{ $particular->description }}
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap space-x-2">
                                            <a href="{{ route('admin.particulars.show', $particular) }}" class="text-blue-500 hover:underline">
                                                {{ __('View') }}
                                            </a>
                                            <a href="{{ route('admin.particulars.edit', $particular) }}" class="text-blue-500 hover:underline">
                                                {{ __('Edit') }}
                                            </a>
                                            <form action="{{ route('admin.particulars.destroy', $particular) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this particular?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-adminLayout>