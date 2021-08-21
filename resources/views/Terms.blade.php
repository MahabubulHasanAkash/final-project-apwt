<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Condition</title>
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
                <label style="font-size: xx-large;">Terms & Condition</label>
            </div>
            <div class="row justify-content-md-center mb-5">
                
            </div>
            <p>@foreach ($termList as $terms) 
          
                {{$terms['terms']}}
              
                @endforeach</p>

        </div>
    </div>

</body>

</html>