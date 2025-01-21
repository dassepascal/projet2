<!-- filepath: resources/views/components/input.blade.php -->
<input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
       @if($required) required @endif
       @if($autofocus) autofocus @endif
       class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">