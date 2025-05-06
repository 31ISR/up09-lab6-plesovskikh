<x-layout>
    <div class="container">
        <h1>Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="form-actions">
                <a href="{{ route('note.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</x-layout>