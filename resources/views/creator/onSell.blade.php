<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>On Sell</title>
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
              <th>Price</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($auctions as $auction)
              <tr>
              <form class="w3-container" action="/nft/add/{{$auction->id}}/{{$auction->creation_id}}" method="post" enctype="multipart/form-data">
                  @csrf 
                <td>{{$auction->id}}</td>
                <td> <a class="btn btn-primary" href="/creator/profile/{{$auction->creation_id}}"> View Creation </a></td>
                <td>
                 {{$auction->value}}
                </td>
                <td>
                  <a href="/creator/sell/{{$auction->id}}/edit"  class="btn btn-primary">Edit </a>
                  <a  href="/creator/sell/{{$auction->id}}/delete" class="btn btn-danger">Delete </a>
                </td>
               </form>
              </tr>
              @endforeach
            </tbody>
            </table>
         
            </div>
            
    </div>   



    @include('includes.footer')
</body>
</html>     