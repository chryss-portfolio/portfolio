@php use App\Models\User; @endphp
<div
    class="flex flex-col pb-4 sm:pb-8 sm:flex-row justify-center sm:items-end space-y-4 sm:space-y-0 sm:space-x-8 lg:space-x-10">
    <!-- Profile Image -->
    <div class="flex justify-center">
        <img
            class="rounded-full w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-56 lg:h-56 xl:w-60 xl:h-60 object-cover p-1"
            src="/img/cat.jpeg" alt="Profile Image">
    </div>
    <!-- User Info -->
    <div class="flex flex-col justify-center text-center sm:text-left">
        <span class="text-5xl font-semibold text-gray-800 dark:text-gray-200 pb-2">{{ User::find(1)->name }}</span>
        <h1 class="text-base font-light text-gray-700 sm:font-thin dark:text-gray-300 md:text-lg">{{ User::find(1)->profile->title }}</h1>
    </div>
</div>

