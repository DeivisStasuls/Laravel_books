<x-layout>
    <div class="book-container">
        <a href="/book/create" class="new-note-btn">
            New Book
        </a>
        <div class="books">
            @foreach ($books as $book)
            <div class="book">
                <div class="book-body">
                    {{Str::words($book->title, 30)}}
                </div>
            </div>
            <div class="book-buttons">
                <a href="/book/{{ $book->id }}" class="book-edit-button">View</a>
                <a href="/book/{{ $book->id }}/edit" class="book-edit-button">Edit</a>
                <button class="book-delete-button">Delete</button> 
            </div>
            @endforeach

        </div>

    </div>
</x-layout>