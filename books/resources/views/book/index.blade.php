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
                <form action="/book/{{$book->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="book-delete-button" onclick="return confirm('Are you sure you want to delete this book?');">Delete</button>            </div>
                </form>
            @endforeach

        </div>

    </div>
</x-layout>