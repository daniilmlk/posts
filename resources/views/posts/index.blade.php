<x-app-layout>
    <h1>Skibidi Sigma Posts</h1>
    <br>
    <ul>
        @foreach($posts as $post)
        <li>
            <h2>Title: {{ $post->title}}</h2>
            <p>Content: {{ $post->content}}</p>
            <div>
                <a href="{{route('posts.show', $post)}}">Show</a>
            </div>
        </li>
        <br>
        @endforeach
    </ul>
</x-app-layout>
