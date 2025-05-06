<x-layout>
    <div class="container">
        <div class="header">
            <h1>My Notes</h1>
            <a href="{{ route('note.create') }}" class="new-note-btn">
                New Note
            </a>
        </div>
        
        <div class="notes-list">
            @foreach ($notes as $note)
                <div class="note-card">
                    <div class="note-content">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-actions">
                        <a href="{{ route('note.show', $note) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $notes->links() }}
        </div>
    </div>
</x-layout>