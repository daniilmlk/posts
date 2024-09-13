<x-app-layout>
    <h1>Title: {{ $post->title }}</h1>
    <br>
    <p>Content: {{ $post->content }}</p>
    <br>
    <ul>
        @foreach([] as $comment)
        <li>
        <p>Comment №{{$comment->id}}: {{ $comment->content }}</p>
        </li>
        @endforeach
    </ul>
    <br>
    <a href="{{route('posts.index')}}">Go back</a>
</x-app-layout>
