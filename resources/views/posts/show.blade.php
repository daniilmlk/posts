<x-app-layout>
    <h1>Title: {{ $post->title }}</h1>
    <br>
    <p>Content: {{ $post->content }}</p>
    <br>
    <ul>
        @foreach($post->comments as $index => $comment)
        <li>
        <p>Comment #{{ $index + 1 }}: {{ $comment->content }}</p>
        </li>
        <br>
        @endforeach
    </ul>
    <br>
    <a href="{{route('posts.index')}}">Go back</a>
</x-app-layout>
