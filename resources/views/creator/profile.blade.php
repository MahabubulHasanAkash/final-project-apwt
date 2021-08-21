<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Profile | {{$name}}</title>
</head>
<body>
    @include('includes.nav')
    <!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">
    
 @include('includes.profile')
  
  
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Creation</h2>
          <div class="w3-container">
            <div>
              <div class="cotainer-fluid" style="margin-left:5%">
                  <div class="row">
                      @foreach ($creations as $nft)
                      <div class="col-md-4" style="height:300px;width:300px">
                          <div class="thumbnail">
                              <a href="/nft/details/{{$nft->id}}"> 
                                  <img src="{{asset('upload/'.$nft->image)}}" alt="Art" style="height:220px;width:300px">
                                  <div class="caption">
                                      Title:{{$nft->name}}<br>
                                      Type:{{$nft->type}}<br>
                                      Price:{{$nft->value}}<br>
                                      
                                  </div>
                              </a>
                          </div>
                      </div> 
                      @endforeach            
                  </div>
              </div>
              <br><br><br>
          </div>
          
          
          
            
          </div>
        </div>
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Collection</h2>
          <div class="w3-container">
            <div>
              <div class="cotainer-fluid" style="margin-left:5%">
                  <div class="row">
                      @foreach ($collections as $nft)
                      <div class="col-md-4" style="height:300px;width:300px">
                          <div class="thumbnail">
                              <a href="/nft/details/{{$nft->id}}"> 
                                  <img src="{{asset('upload/'.$nft->image)}}" alt="Art" style="height:220px;width:300px">
                                  <div class="caption">
                                      Title:{{$nft->name}}<br>
                                      Type:{{$nft->type}}<br>
                                      Price:{{$nft->value}}<br>
                                  </div>
                              </a>
                          </div>
                      </div> 
                      @endforeach            
                  </div>
              </div>
              <br><br><br>
        </div>
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
  </div>
  @include('includes.footer')
</body>
</html>