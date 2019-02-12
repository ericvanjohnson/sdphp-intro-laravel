<h1>Stories</h1>

@foreach ($posts as $post)
    <h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
    <p>{{ $post->body }}</p>
    <em>Posted by: {{ $post->author->name }} on {{ $post->created_at }}</em>
@endforeach
<p>
    {{ $posts->links() }}
</p>
