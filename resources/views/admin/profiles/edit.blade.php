<!-- resources/views/profiles/edit.blade.php -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Profile
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <!-- Back Button -->
                <div class="mb-4">
                    <a href="{{ route('profiles.index') }}" class="text-sm text-blue-600 hover:underline">
                        ← Back to Profiles
                    </a>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('profiles.update', $profile->id) }}" enctype="multipart/form-data">
                    @csrf @method('PUT')

                    <input name="name" value="{{ $profile->name }}" class="w-full border p-2 mb-2">
                    <input name="title" value="{{ $profile->title }}" class="w-full border p-2 mb-2">

                    <textarea name="description" class="w-full border p-2 mb-2">{{ $profile->description }}</textarea>

                    @if ($profile->image)
                        <img src="{{ asset('storage/' . $profile->image) }}"
                            class="w-20 h-20 rounded-full object-cover mb-2">
                    @endif

                    <input type="file" name="image" class="mb-2">

                    @if ($profile->cv_file)
                        <a href="{{ asset('storage/' . $profile->cv_file) }}" target="_blank"
                            class="text-blue-500 block mb-2">View CV</a>
                    @endif

                    <input type="file" name="cv_file" class="mb-2">

                    <input name="email" value="{{ $profile->email }}" class="w-full border p-2 mb-2">
                    <input name="phone" value="{{ $profile->phone }}" class="w-full border p-2 mb-2">
                    <input name="location" value="{{ $profile->location }}" class="w-full border p-2 mb-2">

                    <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
