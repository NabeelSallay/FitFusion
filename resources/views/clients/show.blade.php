<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $clients->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items center">
                        <div class="flex-1 text-2xl">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ $clients->name }}
                            </h2>
                            <p class="text-gray-500">{{ $clients->email }}</p>
                            <p class="text-gray-500">{{ $clients->phone }}</p>
                            <p class="text-gray-500">{{ $clients->age }}</p>
                            <p class="text-gray-500">{{ $clients->weight }}</p>
                            <p class="text-gray-500">{{ $clients->height }}</p>
                            <p class="text-gray-500">{{ $clients->activity_level }}</p>
                            <p class="text-gray-500">{{ $clients->goal }}</p>

                        </div>
                        <div class="flex-1 text-2xl">
                            <a href="{{ route('clients.edit', $clients->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        </div>
                        <div class="flex-1 text-2xl">
                            <form action="{{ route('clients.destroy', $clients->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
