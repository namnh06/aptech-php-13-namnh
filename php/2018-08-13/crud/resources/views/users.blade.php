@extends('layout') 
@section('content')
<div class="container mt-5">
  <div class="d-flex flex-row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <caption>
          <div class="d-flex justify-content-between align-items-center">
            <span>
                List of Users
              </span>
            <form action="{{route('user-create')}}" method="get">
              <button class="btn btn-success">
                  Add More
                </button>
            </form>
          </div>
        </caption>
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class=" ">Name</th>
            <th scope="col" class=" ">Email</th>
            <th scope="col" class=" ">Created Date</th>
            <th scope="col" class="w-25">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td class="d-flex flex-row justify-content-center">
              <form action='users/{{$user->id}}' method="get">
                <button class="btn btn-sm btn-primary mx-2">
                    Show
                  </button>
              </form>
              <form action="{{route('user-edit',$user->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2">
                    Edit
                  </button>
              </form>
              <form action="{{route('user-destroy',$user->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger mx-2">
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