<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOW USER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@extends('layout')
@section('show')
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>     
      <tr class="table-success">
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->created_at }}</td>
        <td>{{ $user->updated_at }}</td>
        <td>
            <form action="{{ route('users.edit',$user->id) }}" method="GET">
            {{ csrf_field() }}
              <button class="btn btn-success" >Edit</button></td>
            </form>  
        </td>
        <td>
            <form action=" {{ route('users.destroy',$user->id) }}" method="POST">
              <input type="hidden" name="_method" value="delete">
              {{ csrf_field() }}
              <button class="btn btn-danger">Delete</button></td>
            </form>  
        </td>
      </tr>
    </tbody>
  </table>

@endsection
</body>
</html>

