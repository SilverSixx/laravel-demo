<x-app-layout>
    <div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $human->name }}</h1>
        <p class="text-lg text-gray-700 mb-6">{{ $human->dob }}</p>

        <div class="flex items-center space-x-4">
            <a href="{{ route('humans.edit', $human) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-semibold text-sm rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Edit
            </a>
            <form action="{{ route('humans.destroy', $human) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 text-white font-semibold text-sm rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Delete
                </button>
            </form>
        </div>

        <a href="{{ route('humans.index') }}" class="mt-6 inline-flex items-center px-4 py-2 bg-gray-500 text-white font-semibold text-sm rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Back
        </a>
    </div>
</x-app-layout>
