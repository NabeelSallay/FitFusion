<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-4">
                    <a href="{{ route('clients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Create</a>
                </div>
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Phone</th>
                        <th class="px-4 py-2">Age</th>
                        <th class="px-4 py-2">Weight</th>
                        <th class="px-4 py-2">Height</th>
                        <th class="px-4 py-2">Activity Level</th>
                        <th class="px-4 py-2">Goal</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td class="border px-4 py-2">{{ $client->name }}</td>
                            <td class="border px-4 py-2">{{ $client->email }}</td>
                            <td class="border px-4 py-2">{{ $client->phone }}</td>
                            <td class="border px-4 py-2">{{ $client->age }}</td>
                            <td class="border px-4 py-2">{{ $client->weight }}</td>
                            <td class="border px-4 py-2">{{ $client->height }}</td>
                            <td class="border px-4 py-2">{{ $client->activity_level }}</td>
                            <td class="border px-4 py-2">{{ $client->goal }}</td>

                            <td class="border px-4 py-2">
                                <a href="{{ route('clients.show', $client->id) }}" class="bg-green-700 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a>
                                <a href="{{ route('clients.edit', $client->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this client?');"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
