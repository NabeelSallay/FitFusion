<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coaches') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-4">
                    <a href="{{ route('coaches.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Create</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Phone</th>
                            <th class="px-4 py-2">Age</th>
                            <th class="px-4 py-2">Certification</th>
                            <th class="px-4 py-2">Experience</th>
                            <th class="px-4 py-2">Training Approach</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($coaches as $coach)
                            <tr>
                                <td class="border px-4 py-2">{{ $coach->name }}</td>
                                <td class="border px-4 py-2">{{ $coach->email }}</td>
                                <td class="border px-4 py-2">{{ $coach->phone }}</td>
                                <td class="border px-4 py-2">{{ $coach->age }}</td>
                                <td class="border px-4 py-2">{{ $coach->certification }}</td>
                                <td class="border px-4 py-2">{{ $coach->experience }}</td>
                                <td class="border px-4 py-2">{{ $coach->training_approach }}</td>
                                <td class="border px-4 py-2">{{ $coach->description }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('coaches.show', $coach->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                                    <a href="{{ route('coaches.edit', $coach->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('coaches.destroy', $coach->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
