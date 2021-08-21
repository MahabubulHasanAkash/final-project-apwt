<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Edit Auctions</title>
</head>
<body>
    @include('includes.nav')
    <div style="margin: 5%">
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2> Edit Auctions</h2>
        <form class="w3-container" action="/creator/auction/{{$creation->id}}/edit" method="post" enctype="multipart/form-data">
          @csrf
          <div>
            <label>Title</label>
            <input value="{{$creation->name}}" class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="name" required>
          </div>
          <div class="w3-section">
            <label>Upload Creation</label>
            <input type="file" class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="image" >
          </div>
          <div class="w3-section">
            <label>Description</label>
            <input  value="{{$creation->description}}"  class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="desc"  >
          </div>
          <div>
          <label>Edition</label>
          <input  value="{{$creation->edition}}"class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="edition"  required>
          </div>
          <br>
          <div>
            <label>Type</label>
            <select name="type" id="type"  class="w3-input w3-border w3-hover-border-black">
              <option value="Fractal/Algorithmic Art">Fractal/Algorithmic Art</option>
              <option value="Data-Moshing">Data-Moshing</option>
              <option value="Dynamic Painting">Dynamic Painting</option>
              <option value="2D Computer Graphics">2D Computer Graphics</option>
              <option value="3D Computer Graphics">3D Computer Graphics</option>
              <option value="Pixel Art">Pixel Art</option>  
              <option value="2D Digital Painting">2D Digital Painting</option>  
              <option value="3D Digital Painting">3D Digital Painting</option>  
              <option value="Manual Vector Drawing">Manual Vector Drawing</option>   
            </select>
            </div>
          <br>
          <button type="submit" class="w3-button w3-block w3-black">Update</button><br>
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



