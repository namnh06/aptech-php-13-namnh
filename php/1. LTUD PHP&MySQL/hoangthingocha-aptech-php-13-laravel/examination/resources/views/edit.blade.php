<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDIT USER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
​@extends('layout')
@section('edit')
  <h3>EDIT PAGE</h3>
  <form action="{{ route('users.update',$user->id ) }}"  method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" placeholder="Enter name" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{$user->password}}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$user->email}}">
    </div>
    <button type="submit" class="btn btn-primary">SAVE</button>
  </form>

@endsection
</body>
</html>