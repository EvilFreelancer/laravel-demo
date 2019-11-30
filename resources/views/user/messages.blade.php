@extends('app')

@push('footer')
  messages
@endpush

@section('content')
  <div class="flex-center position-ref full-height">

    <div class="content">
      <h1 class="h1 mb-4">
        {{ $user->name }}
      </h1>

      @foreach($messages as $message)
        <div class="list-group">
          @include('partials.message')
        </div>
      @endforeach

    </div>
  </div>
@endsection
