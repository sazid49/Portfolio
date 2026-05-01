<x-app-layout>


    <div class="bg-white shadow rounded-lg max-w-2xl mx-auto py-10">

        <h2 class="text-2xl font-bold mb-6">Add Social Link</h2>

        <form action="{{ route('social.store') }}" method="POST" class="bg-white shadow rounded-lg p-6 space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Name
                </label>
                <input type="text" name="name" class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                    placeholder="Facebook, GitHub, Email">
            </div>

            <!-- Icon -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Icon (emoji or class)
                </label>
                <input type="text" name="icon" class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                    placeholder="💼 / fa fa-github">
            </div>

            <!-- URL -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    URL
                </label>
                <input type="url" name="url" class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                    placeholder="https://example.com">
            </div>



            <!-- Submit -->
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">
                Save
            </button>

        </form>
    </div>
</x-app-layout>
