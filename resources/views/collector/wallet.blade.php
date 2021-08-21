<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/wallet.css')}}">
   
    <title>Wallet</title>
</head>
<body>

    <div id="navbar">

        <p id="logo"><b>nft_Place</b></p> 
          
        </div>
        <ul>
          <li><a href="#logout">Logout</a></li>
          <li><a href="#contact">Contact</a></li>
        
          <li>
            <a href="/wallet">Wallet</a>
          </li>
          <li><a href="##">Home</a></li>
        </ul>

            <div>
                <section class="grid-section">
                    <div class="admin-grid">
                      <div class="admin-img">
                      <img src="/images/balance.png" class="image">
                        <div class="middle">
                          <div class="text-bal"> BALANCE <b> {{$user->balance}} ETH </b> </div>
                        </div>
                      </div>      
                    </div>
              
                    <div class="admin-grid">
                      <div class="admin-img">
                        <img src="../images/network.png" class="image">
                          <div class="middle">
                            <div class="text-net"> {{$user->wallet_id}}<br>{{$user->network}} (ETH) <br> Last Block: {{$user->last_token}} </div>
                          </div>
                      </div>       
                    </div>
              
                    <div class="admin-grid">
                      <div class="admin-img">
                        <img src="../images/add.png" class="image">
                        <div class="middle">
                          <div class="text-add">
                            <img src="images/qr.png" alt="qr code">
                          </div>
                        </div>
                      </div>
                    </div>
                      
                  </section>
            </div>
    
</body>
</html>