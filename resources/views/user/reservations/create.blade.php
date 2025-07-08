<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Reserva') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-4">Reserva una Habitación</h1>

                    <form action="{{ route('reservations.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="rooms_id" class="block text-sm font-medium text-gray-700">Habitación</label>
                            <select name="rooms_id" id="rooms_id" class="mt-1 block w-full">
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="check_in_date" class="block text-sm font-medium text-gray-700">Fecha de Ingreso</label>
                            <input type="date" name="check_in_date" id="check_in_date" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="check_out_date" class="block text-sm font-medium text-gray-700">Fecha de Salida</label>
                            <input type="date" name="check_out_date" id="check_out_date" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="num_people" class="block text-sm font-medium text-gray-700">Número de Personas</label>
                            <input type="number" name="num_people" id="num_people" class="mt-1 block w-full" min="1" required>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Reservar Habitación</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

