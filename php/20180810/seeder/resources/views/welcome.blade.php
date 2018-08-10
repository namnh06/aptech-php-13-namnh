<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-12">
   <table class="table table-striped table-bordered table-hover">
       <thead class="thead-dark">
           <tr>
                <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Password</th>
               <th>created_at</th>
               <th>updated_at</th>
           </tr>
       </thead>
       <tbody>
           @foreach($users as $user)
           <tr>
           <td>{{$user->id}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->password}}</td>
               <td>{{$user->created_at}}</td>
               <td>{{$user->updated_at}}</td>
           </tr>
           @endforeach
       </tbody>
   </table>
   </div>
  </div>
  </div>
  </body>
</html>