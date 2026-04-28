<!-- resources/views/profiles/index.blade.php -->
<x-app-layout>
    <div class="p-6">

        <a href="{{ route('profiles.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Profile</a>

        <div class="grid md:grid-cols-3 gap-6 mt-6">
            @foreach ($profiles as $profile)
                <div class="bg-white shadow p-4 rounded">

                    @if ($profile->image)
                        <img src="{{ asset('storage/' . $profile->image) }}"
                            class="w-20 h-20 rounded-full object-cover mb-2">
                    @endif

                    <h3 class="font-bold">{{ $profile->name }}</h3>
                    <p class="text-gray-500">{{ $profile->title }}</p>

                    <div class="mt-3 flex gap-2">
                        <a href="{{ route('profiles.edit', $profile->id) }}"
                            class="bg-yellow-500 px-3 py-1 text-white rounded">Edit</a>

                        <form method="POST" action="{{ route('profiles.destroy', $profile->id) }}">
                            @csrf @method('DELETE')
                            <button class="bg-red-600 px-3 py-1 text-white rounded">Delete</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
