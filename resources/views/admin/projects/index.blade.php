<x-app-layout>

    <div class="p-6">

        <div class="bg-white shadow rounded p-4 overflow-x-auto max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="flex justify-between mb-4">

                    <div class="font-semibold text-xl text-gray-800 leading-tight">
                        Projects List
                    </div>
                    <a href="{{ route('projects.create') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                        + Add Project
                    </a>
                </div>
                <table class="w-full border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-2 text-left">Title</th>
                            <th class="p-2">Tags</th>
                            <th class="p-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr class="border-t">
                                <td class="p-2">{{ $project->title }}</td>
                                <td class="p-2">
                                    @foreach ($project->tags as $tag)
                                        <span class="bg-gray-200 px-2 py-1 rounded text-xs">
                                            {{ $tag->tag }}
                                        </span>
                                    @endforeach
                                </td>
                                <td class="p-2 text-center space-x-2">
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                        class="inline">
                                        @csrf @method('DELETE')
                                        <a href="{{ route('projects.edit', $project->id) }}"
                                            class="bg-yellow-400 px-3 py-1 text-xs rounded">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <button onclick="return confirm('Delete?')"
                                            class="bg-red-500 text-white px-3 py-1 text-xs rounded">
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
</x-app-layout>
