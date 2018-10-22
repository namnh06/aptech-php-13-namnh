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
            <div class="col-12 ">
            <h3 class="text-uppercase">edit page</h3>
            <form action="{{route('users.update',$user->id)}}" method="post">
                <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
                <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="name">name</label>
                <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="email">email</label>
                <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="password">password</label>
                <input type="text" class="form-control rounded-0" id="password" placeholder="password" name="password" value="{{$user->password}}">
                </div>

                <div class="form-group ">
                <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
                    save
                </button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </body>
</html>