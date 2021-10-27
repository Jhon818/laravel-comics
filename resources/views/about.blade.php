@extends('layouts.app')

{{-- extends 'content' in @yield('content') --}}
@section('content1')
  @foreach ($comics as $item)
      {{$item['title']}}
  @endforeach
@endsection