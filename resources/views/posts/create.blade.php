<x-app-layout>
    <h1>Skibidi sigma</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
<br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Create">
    </form>
</x-app-layout>
