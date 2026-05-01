<x-app-layout>
    <div class="bg-white shadow rounded-lg max-w-6xl mx-auto py-6">

        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800">Social Links</h2>

            <a href="{{ route('social.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                + Add New
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="p-3">#</th>
                        <th class="p-3">Name</th>
                        <th class="p-3">Icon</th>
                        <th class="p-3">URL</th>
                        <th class="p-3 text-right">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($links as $key => $link)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3">{{ $key + 1 }}</td>
                            <td class="p-3 font-medium">{{ $link->name }}</td>
                            <td class="p-3 text-xl">{!! $link->icon !!}</td>
                            <td class="p-3">
                                <a href="{{ $link->url }}" target="_blank" class="text-blue-600 hover:underline">
                                    Visit
                                </a>
                            </td>

                            <td class="p-3 text-right space-x-2">
                                <a href="{{ route('social.edit', $link->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                    <i class="fa-solid fa-edit"></i>
                                </a>

                                <form action="{{ route('social.destroy', $link->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Delete?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
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
</x-app-layout>
