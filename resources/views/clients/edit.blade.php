<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit client profile') }} {{ $clients->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action = "{{ route('clients.update', $clients->id) }}"
                      method="POST" class="p-5">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" name="name" id="name" value="{{ $clients->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                        @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email" value="{{ $clients->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ $clients->phone }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('phone')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Age</label>
                        <input type="number" name="age" id="age" value="{{ $clients->age }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('age')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="weight" class="block text-gray-700 text-sm font-bold mb-2">Weight</label>
                        <input type="number" step="0.1" name="weight" id="weight" value="{{ $clients->weight }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('weight')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="height" class="block text-gray-700 text-sm font-bold mb-2">Height</label>
                        <input type="number" step="0.01" name="height" id="height" value="{{ $clients->height }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('height')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="activity_level" class="block text-gray-700 text-sm font-bold mb-2">Activity Level</label>
                        <select name="activity_level" id="activity_level" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Select an option</option>
                            <option value="sedentary" {{ $clients->activity_level == 'sedentary' ? 'selected' : '' }}>Sedentary</option>
                            <option value="lightly_active" {{ $clients->activity_level == 'lightly_active' ? 'selected' : '' }}>Lightly Active</option>
                            <option value="moderately_active" {{ $clients->activity_level == 'moderately_active' ? 'selected' : '' }}>Moderately Active</option>
                            <option value="very_active" {{ $clients->activity_level == 'very_active' ? 'selected' : '' }}>Very Active</option>
                            <option value="super_active" {{ $clients->activity_level == 'super_active' ? 'selected' : '' }}>Super Active</option>
                        </select>
                        @error('activity_level')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="goal" class="block text-gray-700 text-sm font-bold mb-2">Goal</label>
                        <select name="goal" id="goal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Select an option</option>
                            <option value="lose_weight" {{ $clients->goal == 'lose_weight' ? 'selected' : '' }}>Lose Weight</option>
                            <option value="gain_weight" {{ $clients->goal == 'gain_weight' ? 'selected' : '' }}>Gain Weight</option>
                            <option value="maintain_weight" {{ $clients->goal == 'maintain_weight' ? 'selected' : '' }}>Maintain Weight</option>
                        </select>
                        @error('goal')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
