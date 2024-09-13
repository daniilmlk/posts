<x-app-layout>
    <h1>Skibidi sigma edit</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('put')

        <label for="title">Title: </label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
<br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{$post->content}}</textarea>
        <br>
        <input type="submit" value="Edit">
    </form>
</x-app-layout>

