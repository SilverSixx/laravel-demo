<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your note</h1>
        <form action="{{ route('notes.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="title" rows="4" class="note-body" placeholder="{{$note->title}}"></textarea>
            <textarea name="content" rows="10" class="note-body" placeholder="{{$note->content}}"></textarea>
            <div class="note-buttons">
                <a href="{{ route('notes.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
