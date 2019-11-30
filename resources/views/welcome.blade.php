@extends('app')

@push('footer')
  ZZZZZZZZZZZZZzzzxzzz
@endpush

@section('content')
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
      <div class="top-right links">
        @auth
          <a href="{{ url('/home') }}">Home</a>
        @else
          <a href="{{ route('login') }}">Login</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
        @endauth
      </div>
    @endif

    <div class="content">
      <h1 class="h1 mb-4">
        Laravel Demo
      </h1>

      <div class="row">
        @foreach($users as $user)
          <div class="col-4 mb-4">
            @include('partials.user')
          </div>
        @endforeach
      </div>

    </div>
  </div>
@endsection
