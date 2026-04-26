<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Add Project</h2>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto bg-white shadow rounded-lg">
        <div class="mb-4">
            <a href="{{ route('skills.index') }}" class="text-sm text-blue-600 hover:underline">
                ← Back to Skills
            </a>
        </div>
        <form method="POST" action="{{ route('projects.store') }}" class="space-y-4">
            @csrf

            <!-- Title -->
            <div>
                <label class="block mb-1 font-medium">Project Title</label>
                <input type="text" name="title" placeholder="Enter title" class="w-full border rounded p-2">
            </div>

            <!-- Description -->
            <div>
                <label class="block mb-1 font-medium">Description</label>
                <textarea name="description" placeholder="Enter description" class="w-full border rounded p-2"></textarea>
            </div>

            <!-- Icon -->
            <div>
                <label class="block mb-1 font-medium">Icon</label>
                <input type="text" name="icon" placeholder="e.g. 🛒 or fa fa-user"
                    class="w-full border rounded p-2">
            </div>

            <!-- Tags -->
            <div>
                <label class="block mb-1 font-medium">Tags</label>
                <input type="text" name="tags" placeholder="Laravel, React" class="w-full border rounded p-2">
            </div>

            <!-- Button -->
            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Save
            </button>
        </form>
    </div>
</x-app-layout>
