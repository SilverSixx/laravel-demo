<x-app-layout>
    <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Edit Human</h1>
        <form action="{{ route('humans.update', $human) }}" method="POST" class="mb-8">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') ?? $human->name }}" placeholder="{{ $human->name }}" class="mt-1 w-full rounded-md border-transparent focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" name="dob" id="dob" value="{{ old('dob') ?? $human->dob }}" class="mt-1 w-full rounded-md focus:ring-green-500 border-transparent focus:border-green-500 sm:text-sm">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Update</button>
        </form>

        <a href="{{ route('humans.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white font-semibold text-sm rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Cancel</a>

    </div>
</x-app-layout>
