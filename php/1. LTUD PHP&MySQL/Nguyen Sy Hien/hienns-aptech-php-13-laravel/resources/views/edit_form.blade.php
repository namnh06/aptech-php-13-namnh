<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
  </head>
  <body>
      <br><br> <B>
      <div class="container pt-0 pb-0 mt-1 mb-3">  
        <form action="../update/{{$user->id}}" method="post">  
          {{ csrf_field() }}
          <h2>EDIT PAGE </h2> 
          Name: <br>
          <textarea name="name" rows="1" cols="60" required>{{$user->name}}</textarea> <br> 
          Email: <br>
          <textarea name="email" rows="1" cols="60" required>{{$user->email}}</textarea> <br> 
          Password: <br>
          <textarea name="password" rows="1" cols="60" required>{{$user->password}}</textarea> <br>
          <button type="submit" class="btn btn-success">SAVE</button> </B>
        </form>
        <p></p>
      </div>    
  </body>
</html>