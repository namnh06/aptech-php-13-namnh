@extends('layout.master') 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <caption>
          <div class="d-flex justify-content-between align-items-center">
            <span class="text-uppercase">
              aptech php 13
            </span>
            <form action="{{route('users.create')}}" method="get">
              <button type="submit" class="btn btn-success text-uppercase font-weight-bold rounded-0">
                create user
              </button>
            </form>
          </div>
        </caption>
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td class="d-flex flex-row justify-content-center">
              <form action="{{route('users.show',$user->id)}}" method="get">
                <button class="btn btn-sm btn-primary mx-2  rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2  rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger mx-2  rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection