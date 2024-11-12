<!-- resources/views/components/textarea.blade.php -->
@props(['disabled' => false, 'rows' => 4])

<textarea
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'
    ]) }}
    rows="{{ $rows }}"
>
</textarea>
