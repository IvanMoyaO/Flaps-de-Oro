<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('welcome.title') }}
        </h2>
    </x-slot>

    <main class="py-16">
        <div class="container mx-auto px-6">

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Intro flaps -->
                <x-card>
                    <h2 class="text-2xl font-semibold mb-4">{{ __('welcome.about') }}</h2>
                    <p class="text-base text-gray-700">{{ __('welcome.about.desc') }}</p>
                </x-card>

                <!-- Info 1 -->
                <x-card>
                    <h2 class="text-2xl font-semibold mb-4">{{ __('welcome.participants') }}</h2>
                    <p class="text-base text-gray-700">{{ __('welcome.participants.desc') }}</p>
                 </x-card>

                <!-- Info 2 -->
                <x-card>
                    <h2 class="text-2xl font-semibold mb-4">PLACEHOLDER</h2>
                    <p class="text-base text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                    <p class="text-base text-gray-700">Quisque ut nunc ac arcu tincidunt tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                </x-card>

            </div>

        </div>
    </main>
</x-app-layout>
