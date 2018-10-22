<!DOCTYPE html>
<html lang="en">
<head>
  <title>CREATE USER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
​@extends('layout')
@section('create')
  <h3>CREATE PAGE</h3>
  <form action="{{route('users.store')}}"  method="POST">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">CONFIRM</button>
  </form>
@endsection
</body>
</html>