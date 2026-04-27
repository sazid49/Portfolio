<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit Experience</h2>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto bg-white shadow rounded-lg">
        <div class="mb-4">
            <a href="{{ route('experiences.index') }}" class="text-sm text-blue-600 hover:underline">
                ← Back to Experiences
            </a>
        </div>
        <form method="POST" action="{{ route('experiences.update', $experience->id) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block mb-1 font-medium">Title</label>
                <input type="text" name="title" placeholder="Title" class="w-full border p-2 rounded"
                    value="{{ $experience->title }}">
            </div>
            <div>
                <label class="block mb-1 font-medium">Company</label>
                <input type="text" name="company" placeholder="Company" class="w-full border p-2 rounded"
                    value="{{ $experience->company }}">
            </div>
            <div>
                <label class="block mb-1 font-medium">Subtitle</label>
                <input type="text" name="subtitle" placeholder="Subtitle" class="w-full border p-2 rounded"
                    value="{{ $experience->subtitle }}">
            </div>
            <div>
                <label class="block mb-1 font-medium">Duration</label>

                <input type="text" name="duration" placeholder="2022 - 2025" class="w-full border p-2 rounded"
                    value="{{ $experience->duration }}">
            </div>
            <div>
                <label class="block mb-1 font-medium">Description</label>
                <textarea name="description" placeholder="Description" class="w-full border p-2 rounded">{{ $experience->description }}</textarea>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Update
            </button>
        </form>
    </div>
</x-app-layout>
