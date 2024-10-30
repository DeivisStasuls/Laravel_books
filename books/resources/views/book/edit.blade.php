<x-layout>
    <div class="book-container single-book">
        <h1>Edit book</h1>

        <form action="/book/{{$book->id}}" method="POST" class="note">
            @csrf
            @method('put')
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{$book->title}}">
            <br>
            <label for="autors">Autors:</label>
            <input type="text" id="autors" name="autors" value="{{$book->autors}}">
            <br>
            <label for="release_date">Release date:</label>
            <input type="date" id="release_date" name="release_date" value="{{$book->release_date}}">
            <br>
                        
            <button type="submit">Submit</button>
        </form>
    </div>
</x-layout>