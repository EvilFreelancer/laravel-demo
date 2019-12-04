@extends('app')

@section('content')
  <div>
    <h2>{{ $user->name }}</h2>
    <p class="mb-5">{{ $user->email }}</p>

    <h3>User companies</h3>
    <div class="list-group mb-5">
      @foreach($companies as $company)
        <div class="list-group-item">
          {{ $company->pivot->title }} {{ $user->name }} in {{ $company->name }}
        </div>
      @endforeach
    </div>

    <h3>User posts</h3>
    <div class="list-group">
      @foreach($posts as $post)
        <div class="list-group-item">
          <a href="{{ route('post.show', ['post_id' => $post->id]) }}">
            {{ $post->title }}
          </a>
        </div>
      @endforeach
    </div>

  </div>
@endsection
