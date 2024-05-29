<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex justify-between max-w-7xl">
            <h1 class="text-2xl font-bold text-gray-900">Humans</h1>
            <a href="{{ route('humans.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                Create
            </a>
        </div>
        <ul class="mt-4 space-y-2">
            @foreach($humans as $human)
                <li class="flex justify-between items-center p-4 bg-white rounded-lg shadow">
                    <div>
                        <span class="font-bold">{{ $human->name }}</span>
                        <span class="text-gray-500">Dob: {{ $human->dob }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('humans.show', $human) }}" class="inline-flex items-center px-4 py-2 bg-green-400 text-white font-semibold text-sm rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Details
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-6">
            {{ $humans->links() }}
        </div>

    </div>
</x-app-layout>
