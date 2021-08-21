<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Marketplace</title>
</head>
<body>
    @include('includes.nav')
    <div class="container-fluid">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="/home/1" role="tab" aria-controls="" aria-selected="true">Fractal/Algorithmic Art</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="/home/2" role="tab" aria-controls="profile" aria-selected="false">Data-Moshing</a>
            </li>
    
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="/home/3" role="tab" aria-controls="contact" aria-selected="false">2D Computer Graphics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="/home/4" role="tab" aria-controls="contact" aria-selected="false">3D Computer Graphics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="/home/5" role="tab" aria-controls="contact" aria-selected="false">Pixel Art</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="/home/6" role="tab" aria-controls="contact" aria-selected="false">Dynamic Painting</a>
            </li>
          </ul>
    </div>
    <br>
    @include('includes.marketplace')
    @include('includes.footer')
</body>


 