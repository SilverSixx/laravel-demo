<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Create new note</h1>
        <form action="{{ route('notes.store') }}" method="POST" class="note">
            @csrf
            <textarea name="title" rows="2" class="note-body" placeholder="Enter your title here"></textarea>
            <textarea name="content" rows="10" class="note-body" placeholder="Enter your content here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('notes.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
