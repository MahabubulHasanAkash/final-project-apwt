
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/myCollection.css')}}">
    @include('includes.head')
    <title>My Collections</title>
</head>
<body>

    <div id="navbar">

        <p id="logo"><b>nft_Place</b></p> 
          
    </div>
        <ul>
          <li><a href="/logout">Logout</a></li>
          <li><a href="#contact">Contact</a></li>
        
          <li>
            <a href="#complains">Complains</a>
          </li>
          <li><a href="##">Home</a></li>
        </ul>

    <div class="container">
        <br>

        @foreach ($collection as $item)

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/collectionProof/{{$item->id}}">  
            <img src="images/{{$item->image}}" alt="Nature" style="width:100%">
              <div class="caption">
                <p>{{$item->name}} || {{$item->value}} ETH </p>
              </div>
            </a>
          </div>
        </div>
            
        @endforeach

       </div>
</body>
</html>

