<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
  </head>
  <body>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Created Date</th>
      <th scope="col">Updated Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
    </tr>
  </tbody>
</table>

<form action="../index" >  
    &nbsp; <button type="submit" class="btn btn-primary">BACK</button> </B>
</form>




  </body>
</html>