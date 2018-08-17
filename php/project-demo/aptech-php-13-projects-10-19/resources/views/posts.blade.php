@extends('layout') 
@section('content') @foreach($posts as $post)
<a href="./posts/{{$post->id}}">
  <h1>{{$post->id}}</h1>
</a>
@endforeach
@endsection