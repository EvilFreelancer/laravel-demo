<div class="list-group-item">
  <h2><a href="{{ route('post.show', ['post_id' => $post->id]) }}">{{ $post->title }}</a></h2>
  <p>{{ $post->description }}</p>
</div>