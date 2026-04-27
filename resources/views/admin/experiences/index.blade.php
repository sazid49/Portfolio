<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Experiences
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <!-- Add Button -->
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Experiences</h3>

                    <a href="{{ route('experiences.create') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                        + Add Experience
                    </a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="p-2 text-left">Title</th>
                                <th class="p-2">Duration</th>
                                <th class="p-2 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($experiences as $item)
                                <tr class="border-t">
                                    <td class="p-2">{{ $item->title }}</td>
                                    <td class="p-2">{{ $item->duration }}</td>

                                    <td class="p-2 text-center">
                                        <a href="{{ route('experiences.edit', $item->id) }}"
                                            class="bg-yellow-400 px-3 py-1 text-xs rounded">
                                            Edit
                                        </a>

                                        <form action="{{ route('experiences.destroy', $item->id) }}" method="POST"
                                            class="inline">
                                            @csrf @method('DELETE')
                                            <button class="bg-red-500 text-white px-3 py-1 text-xs rounded">
                                                Delete
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
