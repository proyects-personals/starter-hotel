{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hoteles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-4">Hoteles</h1>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($hotels as $hotel)
                            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                                <img class="w-full" src="{{ asset('path_to_image.jpg') }}" alt="hotel">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ $hotel->name }}</div>
                                    <p class="text-gray-700 text-base">{{ $hotel->description }}</p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <!-- Botón para ir a las habitaciones de los hoteles -->
                                    <a href="{{ route('classrooms.show', $hotel->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                                        Ver Habitaciones Disponibles
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
