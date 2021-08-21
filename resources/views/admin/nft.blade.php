<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>NFTs</title>
</head>
<body>
    @include('includes.adminNav')<br>
    
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
    
      <form class="w3-container" action="/NFTs/searchNFT" method="post" style="float:right">
        @csrf
        <input type="text" placeholder="Search NFT " name="search">
        <button type="submit"><i class="fa fa-search"></i></button><br>
        </form><br><br><br>
          {{-- <h3 style="display: inline-block">NFTs<h3>  
            <form class="w3-container" action="/NFTs/searchNFT" method="post" style="float:right">
              @csrf
              <input type="text" placeholder="Search NFT " name="search">
              <button type="submit"><i class="fa fa-search"></i></button><br>
              </form><br><br><br>

              <div class="row">
              @foreach ($nftList as $nfts) 
              <tr>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="/details"  target="_blank"> 
                      <img src="{{asset('upload/'.session('image'))}}" alt="Avatar" style="width:100%">
                      <div class="caption">
                        <p>{{$nfts->name}}</p>
                        
                      </div>
                    </a>
                  </div>
                </div>
               
                @endforeach
              
            </tr>
              </div> --}}
              <div>
                <div class="cotainer-fluid" style="margin-left:5%">
                    <div class="row">
                        @foreach ($nftList as $nfts)
                        <div class="col-md-4" style="height:300px;width:300px">
                            <div class="thumbnail" style="margin-top: 2%">
                                <a href="/nft/details/{{$nfts->id}}"> 
                                    <img src="{{asset('upload/'.$nfts->image)}}" alt="Art" style="height:220px;width:300px">
                                    <div class="caption">
                                        Title:{{$nfts->name}}<br>
                                        Type:{{$nfts->type}}<br>
                                        Price:{{$nfts->value}}eth<br>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        @endforeach            
                    </div>
                    
                
            
              </div>
            </div>
   
    </div><br><br>
    @include('includes.footer')
</body>
</html>     