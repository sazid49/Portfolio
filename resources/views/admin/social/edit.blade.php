<x-app-layout>

    <div class="bg-white shadow rounded-lgmax-w-2xl mx-auto py-10">

        <h2 class="text-2xl font-bold mb-6">Edit Social Link</h2>

        <form action="{{ route('social.update', $link->id) }}" method="POST"
            class="bg-white shadow rounded-lg p-6 space-y-5">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Name
                </label>
                <input type="text" name="name" value="{{ $link->name }}"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
            </div>

            <!-- Icon -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Icon
                </label>
                <input type="text" name="icon" value="{{ $link->icon }}"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
            </div>

            <!-- URL -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    URL
                </label>
                <input type="url" name="url" value="{{ $link->url }}"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
            </div>



            <!-- Buttons -->
            <div class="flex justify-between">
                <a href="{{ route('social.index') }}" class="text-gray-600 hover:underline">
                    Back
                </a>

                <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg">
                    Update
                </button>
            </div>

        </form>
    </div>
</x-app-layout>
