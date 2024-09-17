<x-app-layout>
    <h1>Skibidi sigma comment</h1>

    <form action="{{route('comments.store', ['post' => $post->id])}}" method="POST">
        @csrf
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Create">
    </form>
</x-app-layout>
