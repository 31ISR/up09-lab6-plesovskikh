<x-layout>
    <div class="container">
        <div class="header">
            <h1>Note: {{ $note->created_at->format('M d, Y H:i') }}</h1>
            <div class="note-actions">
                <a href="{{ route('note.edit', $note) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <div class="note-card">
            <div class="note-content">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-layout>