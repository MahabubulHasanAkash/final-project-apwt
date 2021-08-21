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
            background: url("/images/creators-hero.png");
            background-repeat: no-repeat;
            background-size: cover;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand mr-auto" href="#">NFTPlace</a>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <label class="p-5" style="font-size: 40px; font-weight: bold; text-align:center; padding-top:80px !important;">
                Analyze your data and maximize your profit.
            </label>
        </div>
        <div class="col-md-6">
            <div id="card" class="card col-md-4 col-lg-3 col-6 shadow p-1 mb-5 bg-white rounded">
                <div class="card-header">
                    <div class="card-title text-center text-dark" style="font-weight: bold; font-size: 25px">Login To
                        <strong style="color: rebeccapurple; font-size: 30px">NFT</strong>
                    </div>
                </div>

                <div class="card-body" style="padding: 40px;">
                    <form action="login" method="post">
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
                                <input type="submit" class="btn btn-block" value="Login" style="background: #880E4F; color: white; font-weight:bold">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>