
<label for="">Titolo nuovo post</label>
<h1>
  <a href="{{ route('admin.posts.show',$post) }}">
    {{ $post->title }}
  </a>
</h1>