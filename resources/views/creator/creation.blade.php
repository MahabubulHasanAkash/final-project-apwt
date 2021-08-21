<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Ceations</title>
</head>
<body>
    @include('includes.nav')
  
  <div class="w3-card-4 w3-margin w3-white">
    <img src="{{asset('upload/'.$image)}}" style="width:100%" alt="Creation ">
    <div class="w3-container">
      <h3><b> <p>{{$name}}</b></h3>
        <h5>Edition : <span class="w3-opacity">{{$edition}}</span></h5>  
        <h5>Description</h5>
    </div>

    <div class="w3-container">
      <p>{{$description}}
    </div>
  </div>


    @include('includes.footer')
</body>
</html>     