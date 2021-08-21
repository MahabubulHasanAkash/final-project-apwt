<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Store</title>
</head>
<body>
    @include('includes.nav')
    <br><br><br>
    <div class="w3-twothird " style="margin-left:15%">
        <div class="w3-responsive w3-card-4">
            <table class="w3-table w3-striped w3-bordered">
               <thead>
                  <tr class="w3-theme">
                  <th>Id</th>
                  <th>Creation</th>
                  <th>Creator</th>
                  <th>Price</th>
                  <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                @foreach ($store as $auction)
                  <tr>
                    <form class="w3-container" action="/nft/sell/{{$auction->id}}/{{$auction->creation_id}}" method="post" enctype="multipart/form-data">
                    @csrf 
                      <td>{{$auction->id}}</td>
                      <td> <a  href="/creation/{{$auction->creation_id}}"> View Creation </a></td>
                      <td> <a class="btn btn-primary" href="/creator/profile/{{$auction->creator_id}}"> View Creator </a></td>
                      <td>
                        {{$auction->value}}
                      </td>
                      <td><button type="submit" class="btn btn-primary">Buy</button></td>
                    </form>
                  </tr>
                @endforeach
                </tbody>
            </table>
            @if (isset($errors))
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}} <br>
            </div>
            @endforeach
            @endif
            @if (session('msg') != null)
            <div class="alert alert-info" role="alert" >
                {{session('msg')}}
            </div>
            @endif
         
          </div> 
    </div>   
  
    @include('includes.footer')
</body>
</html>     