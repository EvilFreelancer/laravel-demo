@php
  $number = $number ?? 1;
@endphp

@push('footer')
  <h3>{{ $number }} >>>> ZZZZZZZZZZZZZzzzxzzz</h3>
@endpush

@switch($number)

  @case(1)
  <h1>Hello, %username%</h1>
  @break

  @case(2)
  <h1>Sup dude</h1>
  @break

  @case(3)
  <h1>Hi</h1>
  @break

  @default
  <h1>Awesome</h1>
  @break

@endswitch
