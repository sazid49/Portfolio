<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Testimonials
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <!-- Back Button -->
                <div class="mb-4">
                    <a href="{{ route('testimonials.index') }}" class="text-sm text-blue-600 hover:underline">
                        ← Back to Testimonials
                    </a>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium">Name</label>
                        <input type="text" name="name" class="w-full border p-2 rounded">
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Designation</label>
                        <input type="text" name="designation" class="w-full border p-2 rounded">
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Company</label>
                        <input type="text" name="company" class="w-full border p-2 rounded">
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Rating (1-5)</label>
                        <input type="number" name="rating" min="1" max="5"
                            class="w-full border p-2 rounded">
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Message</label>
                        <textarea name="message" class="w-full border p-2 rounded"></textarea>
                    </div>

                    <!-- AVATAR -->
                    <div>
                        <label class="block text-sm font-medium">Avatar Image</label>
                        <input type="file" name="avatar" class="w-full border p-2 rounded">
                    </div>

                    <button class="bg-green-600 text-white px-4 py-2 rounded">
                        Save
                    </button>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
