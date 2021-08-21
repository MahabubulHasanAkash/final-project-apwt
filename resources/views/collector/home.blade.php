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

    <style>
        body{background-image: linear-gradient(to bottom, #407587, #427280, #456f79, #476b72, #4a686c, #4e7075, #51797d, #558186, #5998a1, #5cafbd, #5ec7db, #5fdffb);}
    </style>
    @include('includes.col_nav')
    <div class="container">
       <br>
        <div class="w3-right">
            <div class="w3-dropdown-hover">
              <button class="w3-button w3-theme">Sort <i class="fa fa-caret-down"></i></button>
              <div class="w3-dropdown-content w3-bar-block w3-border">
                <a href="#" class="w3-bar-item w3-button">A-Z</a>
                <a href="#" class="w3-bar-item w3-button">Price(Low to Hight)</a>
                <a href="#" class="w3-bar-item w3-button">Price(High to Low)</a>
              </div>
            </div>
          </div>
        <h3 style="display: inline-block">Featured<h3>  
          @include('includes.marketplace') 
      </div>
</body>
@include('includes.footer1')
</html>