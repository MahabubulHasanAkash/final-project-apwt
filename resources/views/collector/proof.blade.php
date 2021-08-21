<!doctype html>
<head>
    <link rel="stylesheet" href="{{asset('css/proof.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Proof</title>

</head>

<body>


    <header id="pageHeader">
        <div id="navbar">

            <p id="logo"><b>nft_Place</b></p> 
          
        </div>
        
        <ul>
          <li><a href="#logout">Logout</a></li>
          <li><a href="#contact">Contact</a></li>
        
          <li>
            <a href="#complains">Complains</a>
          </li>
          <li><a href="##">Home</a></li>
        </ul>
    </header>
    
    <article id="mainArticle">
        <h2>Proof of Authenticity</h2>
        <p>MakersPlace verifies the uniqueness and authenticity of every digital creation</p>
        <div class="proof-detail">
            <h1>
                {{$item->name}}
            </h1>
            <p>
                Creator: {{$item->creator}} <br>
                Edition: {{$item->edition}} <br>
                Created: {{$item->creation_date}} <br>
            </p>
            <h1>
                <i class="fab fa-ethereum">&nbsp; Ethereum</i>
            </h1>
            <p>
                Token ID: <b>{{$item->token}}</b> <br>
                Contract ID: <b>{{$block->contract_id}}</b> <br>
                Creator's Blockchain ID: <b>{{$block->creators_block}}</b> 
            </p>
            <h4><a href="#">View Blockchain Details</a></h4><br>

            <div class="w3-container">
                <h2>Ownership History</h2>
              
                <table class="w3-table w3-bordered">
                  <tr>
                    <th>Event</th>
                    <th>Owner</th>
                    <th>Date</th>
                  </tr>
                  <tr>
                    <td>Sold</td>
                    <td>Smith</td>
                    <td>22 May 2021</td>
                  </tr>
                  <tr>
                    <td>Created</td>
                    <td>Jackson</td>
                    <td>05 January 2021</td>
                  </tr>
                </table>
              </div>

              <div class="w3-container">
                <h2>Editions</h2>
              
                <table class="w3-table w3-bordered">
                  <tr>
                    <th>Edition</th>
                    <th>Owner</th>
                    <th>Date Issued</th>
                  </tr>
                  <tr>
                    <td>#2</td>
                    <td>Jhon</td>
                    <td>22 May 2021</td>
                  </tr>
                  <tr>
                    <td>#1</td>
                    <td>Jackson</td>
                    <td>05 March 2021</td>
                  </tr>
                </table>
              </div>
        </div>
    </article>


    <div id="siteAds">
      <h2>{{$item->name}}</h2>
      <p>{{$item->desc}}</p>
      <img src="/images/{{$item->image}}" alt="art01" width="100%">
    </div>
    
    <nav id="mainNav"><!--Side Navigation--></nav>
    <footer id="pageFooter"><!--Footer--></footer>

</body>
