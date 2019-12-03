@extends('app')

@section('content')
  <div>
    <h2>{{ $post->title }}</h2>

    <p>{{ $post->description }}</p>

    <h3>Messages</h3>
    <div class="list-group">
      @foreach($messages as $message)
        <div class="list-group-item">
          {{ $message->text }}<br />
          <a href="{{ route('user.show', ['user_id' => $message->user->id]) }}">
            {{ $message->user->name }}
          </a>
          <span class="float-right">{{ $message->created_at->format('Y-m-d H:i:s') }}</span>
        </div>
      @endforeach
    </div>

  </div>
@endsection