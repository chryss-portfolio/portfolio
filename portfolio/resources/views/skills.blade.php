@php use App\Models\User; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16">
                        <!-- Main header with responsive font size and padding -->
                        <div
                            class="flex justify-center sm:justify-normal md:justify-normal lg:justify-normal xl:justify-normal">
                            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-5xl font-bold pb-6 sm:pb-8 md:pb-10 lg:pb-12 ">
                                Programming Languages
                            </h1>
                        </div>


                        <div>
                            <ul>
                                @foreach(User::find(1)->skill as $skill)
                                    <li class="py-4 sm:py-6">
                                        <!-- Grid layout with limited width for items -->
                                        <div
                                            class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4 items-center max-w-3xl mx-auto">
                                            <!-- Programming Language -->
                                            <div class="">
                                                <h2 class="text-lg sm:text-xl md:text-2xl lg:text-2xl font-semibold">{{ $skill->programming_language }}</h2>
                                            </div>

                                            <!-- Progress Bar -->
                                            <div
                                                class="w-full max-w-xs sm:max-w-sm lg:max-w-md rounded-full h-6 sm:h-9 lg:h-12">
                                                <div
                                                    class="bg-green-400 border border-black border-opacity-50 h-full rounded-full"
                                                    style="width: {{$skill->percentage}}%">
                                                    <span
                                                        class="flex items-center justify-center h-full text-black text-sm sm:text-lg lg:text-xl font-bold w-full text-center">{{ $skill->percentage }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
