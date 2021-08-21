<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @include('includes.head')
   <style>
        body {
            padding: 0;
            margin: 0;
        }

        #card {
            position: fixed;
            top: 50%;
            left: 70%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    @include('includes.header')
    <div class="row row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="row justify-content-md-center">
                <label style="font-size: xx-large;">Collecor - Sign Up</label>
            </div>
            <div class="row justify-content-md-center mb-5">
                <label style="font-size:medium;">Collect and sell your unique digital creations.</label> 
            </div>
            <div class="row justify-content-md-center mb-5">
                <a href="/creator/signup" style="font-size:medium; color:rgb(57, 94, 98);">Signup as creator?</a>
            </div>
          
            <form action="/collector/signup" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="name" name="name" placeholder="Name" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="email" name="email" placeholder="Email address" type="email" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="password" name="password" placeholder="Password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input autocomplete="off" class="form-control" id="password_confirmation'" name="password_confirmation'" placeholder="Confirm password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                      <label> By signing up you are accepting our <a href="/terms" > terms & condition </a> and you have read <a href="">
                       Privacy policy </a> including our cookie use</label> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <button  class="btn btn-block" value="Signup" style="background:black; color: white; font-weight:bold">Signup </button>
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
    

</body>

</html>