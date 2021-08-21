<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Details</title>
</head>
<body>
    @include('includes.nav')
  <div class="w3-card-4 w3-margin w3-white">
    <img src="{{asset('upload/'.$image)}}" style="width:100%" alt="Creation ">
    <div class="w3-container">
      <h3><b> <p>{{$name}}</b></h3>
        <h5>Edition : <span class="w3-opacity">{{$edition}}</span></h5>  
        <h5>Description:</h5>
        <div class="w3-container">
          <p>{{$desc}}  
        </div>
        <h5>Price : {{$value}}</h5>
    </div>
    
   
  </div>


    @include('includes.footer')
</body>
</html>     