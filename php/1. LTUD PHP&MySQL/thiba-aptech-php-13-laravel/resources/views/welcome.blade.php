<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
<div class="container">
  <div class="row">
    <button><a href="{{route('store')}}">Create user </a></button>
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th scope="col" class="">Password</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $User)
        <tr>
                <td scope="row">{{$User->id}}</td>
                <td>{{$User->name}}</td>
                <td>{{$User->email}}</td>
                <td>{{$User->password}}</td>
                <td class="d-flex flex-row justify-content-center"> 
                    <form action="./users/{{$User->id}}" medthod="GET">
                    <button class="btn btn-sm btn-warning mx-2  rounded-0">Xem Chi Tiết</button>
                    </form>

                    <form action="{{route('users.destroy',$User->id)}}" method="post">
                        <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                        <button class="btn btn-sm btn-warning mx-2  rounded-0">Delete</button>
                    </form>

                    <form action="{{route('users.edit',$User->id)}}" method="get">
                        <button class="btn btn-sm btn-warning mx-2  rounded-0">
                        Edit
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
</body>
</html>