<div class="card">
  <div class="card-header">
    <a href="{{ route('user.name', ['user_id' => $user->id]) }}">
      U: {{ $user->name }}
    </a>
  </div>
  <div class="card-body">
    <p>E: {{ $user->email }}</p>
    <p>C: {{ $user->created_at }}</p>
    <p>U: {{ $user->updated_at }}</p>
  </div>
</div>