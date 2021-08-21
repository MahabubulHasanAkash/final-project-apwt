<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @include('includes.head')

</head>
<body>
    @include('includes.header')

    <div class="row">
        <div class="col-md-6">
            <label class="p-5" style="font-size: 40px; font-weight: bold; text-align:center; padding-top:80px !important;">
                Protect and Sell your Unique Digital Creations
            </label>
        </div>
                <div class=" card-body" style="padding: 40px;margin-left: 400px; ">
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <input autocomplete="off" class="form-control" id="email" name="email" placeholder="Email address" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <input class="form-control" id="password" name="password" placeholder="Password" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <button  class="btn btn-block" value="Login" style="background:black; color: white; font-weight:bold">Login </button>
                            </div>
                        </div>
                        @if (isset($errors))
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}} <br>
                        </div>
                        @endforeach
                        @endif
                        @if (session('msg') != null)
                        <div class="alert alert-info" role="alert">
                            {{session('msg')}}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</body>

</html>