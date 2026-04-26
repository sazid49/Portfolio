<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Skill
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <!-- Back Button -->
                <div class="mb-4">
                    <a href="{{ route('skills.index') }}" class="text-sm text-blue-600 hover:underline">
                        ← Back to Skills
                    </a>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('skills.update', $skill->id) }}" class="space-y-4">
                    @csrf
                    @method('put')

                    <!-- Skill Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Skill Name
                        </label>
                        <input type="text" name="name" placeholder="Skill Name" value="{{ $skill->name }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Icon -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Icon (emoji)
                        </label>
                        <input type="text" name="icon" value="{{ $skill->icon }}" placeholder="🔥 ⚡ 🐘"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Level -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Level
                        </label>
                        <input type="text" name="level" placeholder="Expert / Advanced" value="{{ $skill->level }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Priority
                        </label>
                        <input type="text" name="order" value="{{ $skill->order }}" placeholder="Expert / Advanced"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Submit -->
                    <div class="pt-2">
                        <button type="submit"
                            class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg text-sm font-medium transition">
                            Update Skill
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
