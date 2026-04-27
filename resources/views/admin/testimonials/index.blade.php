<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Testimonials
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <!-- Add Button -->
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Testimonials List</h3>

                    <a href="{{ route('testimonials.create') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                        + Add Testimonial
                    </a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="p-2 text-left">Name</th>
                                <th class="p-2 text-left">Avatar</th>
                                <th class="p-2 text-left">Designation</th>
                                <th class="p-2 text-left">Company</th>
                                <th class="p-2 text-left">Message</th>
                                <th class="p-2">Rating</th>
                                <th class="p-2 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($testimonials as $item)
                                <tr class="border-t">
                                    <td class="p-2">{{ $item->name }}</td>
                                    <td class="p-2">
                                        @if ($item->avatar)
                                            <img src="{{ asset('storage/' . $item->avatar) }}" alt="Avatar"
                                                class="w-12 h-12 rounded-full object-cover">
                                        @else
                                            <div
                                                class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center text-gray-600">
                                                N/A
                                            </div>
                                        @endif
                                    </td>
                                    <td class="p-2">{{ $item->designation }}</td>
                                    <td class="p-2">{{ $item->company }}</td>
                                    <td class="p-2">{{ $item->message }}</td>
                                    <td class="p-2">{{ $item->rating }} ⭐</td>

                                    <td class="p-2 text-center">
                                        <a href="{{ route('testimonials.edit', $item->id) }}"
                                            class="bg-yellow-400 px-3 py-1 text-xs rounded">
                                            Edit
                                        </a>

                                        <form action="{{ route('testimonials.destroy', $item->id) }}" method="POST"
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
