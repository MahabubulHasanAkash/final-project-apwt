<div>
    <div class="cotainer-fluid" style="margin-left:5%">
        <div class="row">
            @foreach ($nfts as $nft)
            <div class="col-md-4" style="height:300px;width:300px">
                <div class="thumbnail" style="margin-top: 2%">
                    <a href="/details/{{$nft->id}}"> 
                        <img src="{{asset('upload/'.$nft->image)}}" alt="Art" style="height:220px;width:300px">
                        <div class="caption">
                            Title:{{$nft->name}}<br>
                            Type:{{$nft->type}}<br>
                            Price:{{$nft->value}}eth<br>
                        </div>
                    </a>
                </div>
            </div> 
            @endforeach            
        </div>
        
    </div>
</div>






