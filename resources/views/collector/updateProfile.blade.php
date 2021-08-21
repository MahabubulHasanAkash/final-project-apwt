<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/col_profileUpdate.css')}}">
    <title>Document</title>
</head>
<body>



    <form action="/collector/profileUpdate" method="POST">
      @csrf
    <div class="form" method="post">
        <div class="title">nft_Place</div>
        <div class="subtitle">Update Profile</div>
        <div class="input-container ic1">
          <input id="name" class="input" type="text" placeholder=" " name="name" value="{{$user->name}}"/>
          <div class="cut"></div>
          <label for="name" class="placeholder">Name</label>
        </div>
        <div class="input-container ic2">
          <input id="email" class="input" type="text" placeholder=" " name="email" value="{{$user->email}}"/>
          <div class="cut"></div>
          <label for="email" class="placeholder">Email</label>
        </div>
        <div class="input-container ic2">
          <input id="phone" class="input" type="text" placeholder=" " name="phone" value="{{$user->phone}}"/>
          <div class="cut cut-short"></div>
          <label for="phone" class="placeholder">Phone</>
        </div>
        <div class="input-container ic2">
          <input id="address" class="input" type="text" placeholder=" " name="address" value="{{$user->address}}"/>
          <div class="cut cut-short"></div>
          <label for="address" class="placeholder">Address</>
        </div>
        <div class="input-container ic2">
          <input id="dob" class="input" type="text" placeholder=" " name="dob" value="{{$user->dob}}"/>
          <div class="cut cut-short"></div>
          <label for="dob" class="placeholder">Date Of Birth</>
        </div>
        <button type="text" class="submit">submit</button>
        <a href="/profile" class="button">Back To Profile</a>
      </div>
    </form>
    
</body>
</html>


