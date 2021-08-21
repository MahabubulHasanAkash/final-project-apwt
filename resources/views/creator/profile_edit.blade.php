<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Edit | {{$name}}</title>
</head>
<body>
    @include('includes.nav')
    @include('includes.profile')
    <div class="w3-twothird">
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <form class="w3-container" action="/creator/profile/settings/{{$id}}" method="post" enctype="multipart/form-data">
          @csrf
          <div>
            <label>Name</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="name" value="{{$name}}" required>
          </div>
          <div class="w3-section dsiabled">
            <label>Email</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" value="{{$email}}" required disabled>
          </div>
          <div class="w3-section">
            <label>Profile Picture</label>
            <input type="file" class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="image" >
          </div>
          <div class="w3-section">
            <label>Phone</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="phone" value="{{$phone}}" >
          </div>
          <div>
          <label>Old Password</label>
          <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="password-old">
          </div>
          <div class="w3-section dsiabled">
          <label>New Password</label>
          <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="password-old">
          </div>
          <button type="submit" class="w3-button w3-block w3-black">Save</button><br>
        </form>
        @if (isset($errors))
        @foreach ($errors->all() as $error)
           {{$error}} <br>
        @endforeach
        @endif
      </div>
  </div>   
  @include('includes.footer')
</body>
</html>     



