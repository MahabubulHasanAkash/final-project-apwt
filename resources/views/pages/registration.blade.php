<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand mr-auto" href="#">NFTPlace</a>

            <a href="/login" class="btn btn-light text-black">Login</a>
        </div>
    </nav>

    <div class="row row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="row justify-content-md-center">
                <label style="font-size: xx-large;">Creator - Sign Up</label>
            </div>
            <div class="row justify-content-md-center mb-5">
                <label style="font-size:medium;">Create and sell your unique digital creations.</label>
            </div>
            <form action="analitycs/registration" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Upload Profile Image</label>
                        <input class="form-control" name="file" type="file">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Full Name</label>
                        <input autocomplete="off" class="form-control" id="FullName" name="name" placeholder="Enter fullname" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Email Address</label>
                        <input autocomplete="off" class="form-control" id="Email" name="email" placeholder="Enter email" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Address</label>
                        <input autocomplete="off" class="form-control" id="Email" name="address" placeholder="Enter address" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Phone</label>
                        <input autocomplete="off" class="form-control" id="Email" name="phone" placeholder="Enter phone" type="text" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Enter Password</label>
                        <input autocomplete="off" class="form-control" id="Password" name="password" placeholder="Password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <label>Confirm Password</label>
                        <input autocomplete="off" class="form-control" id="ConPassword" name="conpassword" placeholder="Confirm password" type="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2">
                        <input type="submit" class="btn btn-block" value="Registration" style="background: #880E4F; color: white; font-weight:bold">
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>