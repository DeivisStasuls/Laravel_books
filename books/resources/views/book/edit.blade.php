<x-layout>
    <div class="book-container single-book">
        <h1>Edit book</h1>

        <form action="/book" method="POST" class="note">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <br>
            <label for="autors">Autors:</label>
            <input type="text" id="autors" name="autors">
            <br>
            <label for="release_date">Release date:</label>
            <input type="text" id="release_date" name="release_date">
            <br>
                        
            <button type="submit">Submit</button>
        </form>
    </div>
</x-layout>