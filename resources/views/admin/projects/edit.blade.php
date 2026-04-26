<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit Project</h2>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto bg-white shadow rounded-lg">
        <div class="mb-4">
            <a href="{{ route('skills.index') }}" class="text-sm text-blue-600 hover:underline">
                ← Back to Skills
            </a>
        </div>
        <form method="POST" action="{{ route('projects.update', $project->id) }}" class="space-y-4">
            @csrf

            @method('PUT')

            <div>
                <label class="block mb-1 font-medium">Project Title</label>
                <input type="text" name="title" value="{{ $project->title }}" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block mb-1 font-medium">Description</label>
                <textarea name="description" class="w-full border rounded p-2">{{ $project->description }}</textarea>
            </div>

            <div>
                <label class="block mb-1 font-medium">Icon</label>

                <input type="text" name="icon" value="{{ $project->icon }}" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block mb-1 font-medium">Tags</label>
                <input type="text" name="tags" value="{{ $tags }}" class="w-full border rounded p-2">
            </div>


            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Update
            </button>
        </form>
    </div>
</x-app-layout>
