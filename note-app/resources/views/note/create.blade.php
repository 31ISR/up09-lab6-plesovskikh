<x-layout>
    <div class="container">
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST">
            @csrf
            <textarea name="note" rows="10" placeholder="Enter your note here"></textarea>
            <div class="form-actions">
                <a href="{{ route('note.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</x-layout>