<!-- resources/views/contact.blade.php -->

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Contact Us') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Have questions? Reach out to us by filling out the form below.") }}
        </p>
    </header>

    <form action="{{ route('contact.store') }}" method="POST" class="mt-6 space-y-6">
        @csrf

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Your Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required value="{{ old('name') }}" autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Email Field -->
        <div>
            <x-input-label for="email" :value="__('Your Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required value="{{ old('email') }}" autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <!-- Message Field -->
        <div>
            <x-input-label for="message" :value="__('Your Message')" />
            <x-textarea-input id="message" name="message" class="mt-1 block w-full" rows="4" required></x-textarea-input>
            <x-input-error class="mt-2" :messages="$errors->get('message')" />
        </div>
        <!-- Success Message -->
        @if (session('success'))
            <div
                x-data="{ show: true }"
                x-init="setTimeout(() => show = false, 1500)"
                x-show="show"
                x-transition:leave="transition-opacity duration-1000"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="me-3 mt-4 p-4 text-green-600 bg-green-100 rounded-md">
                {{ session('success') }}
            </div>
        @endif
        <!-- Submit Button -->
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Submit') }}</x-primary-button>
        </div>
    </form>


</section>
