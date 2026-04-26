<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Skills
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <!-- Add Button -->
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Skills List</h3>

                    <a href="{{ route('skills.create') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                        + Add Skill
                    </a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Name</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Level</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Icon</th>
                                <th class="px-4 py-2 text-center text-sm font-semibold text-gray-600">Action</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($skills as $skill)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-2 text-gray-700">
                                        {{ $skill->name }}
                                    </td>

                                    <td class="px-4 py-2">
                                        <span
                                            class="px-2 py-1 text-xs rounded-full
                                            {{ $skill->level == 'Expert' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                            {{ $skill->level }}
                                        </span>
                                    </td>

                                    <td class="px-4 py-2">
                                        {{ $skill->icon }}
                                    </td>

                                    <td class="px-4 py-2 text-center space-x-2">

                                        <!-- Edit -->
                                        <a href="{{ route('skills.edit', $skill->id) }}"
                                            class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs font-medium">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')

                                            <button onclick="return confirm('Are you sure?')"
                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
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
