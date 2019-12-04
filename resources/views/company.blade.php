@extends('app')

@section('content')
  <div>
    <h2 class="mb-5">{{ $company->name }}</h2>

    <h3>Tags</h3>
    <div class="list-group">
      @foreach($company->tags as $tag)
        <div class="list-group-item">
          {{ $tag->name }}
        </div>
      @endforeach
    </div>

  </div>
@endsection