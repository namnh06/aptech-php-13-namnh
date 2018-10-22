<!DOCTYPE html>
<html lang="en">
<head>
  <title>LIST OF USERS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@extends('layout')
@section('index')
  <h3>INDEX PAGE</h3>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th class="id">#</th>
        <th class="name">Name</th>
        <th class="email">Email</th>
        <th class="action">Show</th>
        <th class="action">Update</th>
        <th class="action">Delete</th>
      </tr>
    </thead>
    <tbody>
    @php
        foreach($users as $user){
    @endphp
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <form action=" {{ route('users.show',$user->id) }}" method="GET">
              <button class="btn btn-info">Show</button>
            </form>
        </td>
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
    @php
        }
    @endphp  
    </tbody>
  </table>

@endsection
</body>
</html>
