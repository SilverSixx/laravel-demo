<x-app-layout>
    <a href="{{ route('notes.create') }}" class="new-note-btn">Create Note</a>
    <div class="notes py-12">
        @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    <h2>{{ Str::words($note->title, 5) }}</h2>
                    <p>{{ Str::words($note->content, 15) }}</p>
                </div>

                <div class="note-buttons">
                    <a href="{{ route('notes.show', $note) }}" class="note-edit-button">View</a>
                    <a href="{{ route('notes.edit', $note) }}" class="note-edit-button">Edit</a>
                    <form action="{{ route('notes.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="note-delete-button">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    {{ $notes->links()}}
</x-app-layout>
