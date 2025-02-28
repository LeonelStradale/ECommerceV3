@props(['width' => 'sm:max-w-md'])

<div
    class="w-full {{ $width }} bg-white rounded-lg shadow-2xl dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        {{ $slot }}
    </div>
</div>
