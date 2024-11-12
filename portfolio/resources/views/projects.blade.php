<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16">
                        <div class="flex flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row 2xl:flex-row rounded-lg backdrop-brightness-50 border-4 border-opacity-50 border-black items-center">
                            <!-- Image Section -->
                            <div class="rounded max-w-lg h-auto p-4 sm:p-8 md:p-10 lg:p-12 xl:p-16">
                                <img class="rounded" src="/img/jecati.jpeg" alt="Construction Image"/>
                            </div>
                            <!-- Text Section -->
                            <div class="flex flex-col mx-8 justify-center text-center sm:text-left md:text-left lg:text-left xl:text-left 2xl:text-left">
                                <!-- Title Text -->
                                <span class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-4xl 2xl:text-6xl font-medium pb-4">
                                    Jecati Construction Services
                                </span>
                                <!-- Description Text -->
                                <p class="text-sm text-justify sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-2xl font-thin">
                                    This website was built by a team in 2nd year of college.
                                    Made for ordering construction services, construction equipment,
                                    and asking inquiries for construction purposes online.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
