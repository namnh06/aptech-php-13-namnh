<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
    <!-- jQuery --> <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery --> <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>
  <body>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <div>
      <td> 
        <form action="show/{{$user->id}}" method="get">
          <button type="submit" class="btn btn-info">show </button>
        </form>
      <td>
        <form action="edit/{{$user->id}}" method="get">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-primary">update </button>
        </form>
      </td>
      <td>
        <form action="destroy/{{$user->id}}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger">delete </button>
        </form>
      </td>
      <div>
    </tr>
    @endforeach
  </tbody>
</table>

&nbsp;&nbsp; <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#toggle_2">CREATE AN USER</button>

<div class="container collapse" id="toggle_2" >
      <form method="post" action="create">  
        {{ csrf_field() }} 
        <br> <B> 
        Name: <br>
        <textarea name="name" rows="1" cols="60"></textarea> <br>
        Email: <br>
        <textarea name="email" rows="1" cols="60"></textarea> <br> 
        Password: <br>
        <textarea name="password" rows="1" cols="60"></textarea> </B> <br>
        <button type="submit" class="btn btn-success">Create</button> <br> <br>
      </form>
    </div>

  </body>
</html>