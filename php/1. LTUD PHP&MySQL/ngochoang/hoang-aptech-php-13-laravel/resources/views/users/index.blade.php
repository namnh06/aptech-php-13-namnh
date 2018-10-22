@extends('layout.master') 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3 class="text-uppercase">Index Interface </h3>
    

  <table class="table table-bordered table-sm">
    <thead>
      <tr  class="text-center">
      <th  class="">#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr class="text-center">
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('users.show',$user->id)}}" method="get">
                <button class="btn btn-sm bg-info   rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button class="btn btn-sm bg-success  rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm bg-dark   rounded-0">
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