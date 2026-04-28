<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Profile
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
                <form method="POST" action="{{ route('profiles.store') }}" enctype="multipart/form-data">
                    @csrf

                    <input name="name" placeholder="Name" class="w-full border p-2 mb-2">
                    <input name="title" placeholder="Title" class="w-full border p-2 mb-2">
                    <textarea name="description" placeholder="Description" class="w-full border p-2 mb-2"></textarea>

                    <input type="file" name="image" class="mb-2">
                    <input type="file" name="cv_file" class="mb-2">

                    <input name="email" placeholder="Email" class="w-full border p-2 mb-2">
                    <input name="phone" placeholder="Phone" class="w-full border p-2 mb-2">
                    <input name="location" placeholder="Location" class="w-full border p-2 mb-2">

                    <button class="bg-green-600 text-white px-4 py-2 rounded">Save</button>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
