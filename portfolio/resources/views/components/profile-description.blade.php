<div class="mt-4 sm:mt-6 text-center sm:text-left">
    <p class="text-gray-700 dark:text-gray-300 indent-8 text-justify sm:text-base md:text-lg lg:text-xl mb-4 sm:mx-8 sm:tracking-normal sm:leading-snug lg:leading-relaxed xl:mx-16">
        {{ \App\Models\User::find(1)->profile->description }}
    </p>
</div>
