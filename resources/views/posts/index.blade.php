<x-app-layout>
    <h1>Skibidi Sigma Posts</h1>
    <br>
    <a href="{{route('posts.create')}}">Create sigma post</a>
    <br>
    <br>
    <ul>
        @foreach($posts as $post)
        <li>
            <h2>Title: {{ $post->title}}</h2>
            <p>Content: {{ $post->content}}</p>
            <div>
                <a href="{{route('posts.edit', $post)}}">Edit</a>
                <form action="{{route('posts.destroy', $post)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
                <br>
                <a href="{{route('comments.create', $post)}}">Add a comment</a>
                <a href="{{route('posts.show', $post)}}">View Comments</a>
            </div>
        </li>
        <br>
        @endforeach
    </ul>
</x-app-layout>
