<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('includes.head')
        <title>Marketplace</title>
    </head>
    <style> 

    .container
  {
    position: absolute;
    left: 40%;
    top: 65.5%;
    height: 200px;
    margin-top: -100px /* half of you height */
    width: 300px;
    margin-left: -200px /* half of you width */
  }

  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.scrollmenu {
  
  overflow: auto;
  white-space: nowrap;
}

.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.scrollmenu a:hover {
  background-color: #777;
}
</style>

<body class="w3-theme-l5">
    @include('includes.adminNav')
    


  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
  
    <!-- The Grid -->
    <div class="w3-row-padding">
    
      <!-- Left Column -->
      @include('includes.adminSideBar')
  
      <!-- Right Column -->
      <div class="w3-twothird">         
        <div class="w3-container w3-card w3-white"><br>
          <a href="{{ URL::previous() }}" class="fa fa-mail-reply"> Go Back</a>  
          <div class="w3-searchbar" style="float:right">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button><br>
        </div><br><br><br><br>
        <p class="fa fa-cog w3-large"> Terms & Conditins</p> <br> <br>            
                        
        <form method="post">
          @csrf
          <table>
              
              <tr>
                  <td><b>Details</b></td>
                  {{-- <td><input type="text" name="announcement"></td> --}}
              
                  <td><textarea rows="8" cols="100" name="terms">
                    @foreach ($termList as $terms) 
          
                    {{$terms['terms']}}
                  
                    @endforeach</textarea></td>
                  
              </tr>
              
          </table><br>
          
          <button class="w3-button w3-blue"style="float: right;"><i class="fa fa-edit w3-margin-right"></i>Update</button><br><br><br><br>
          {{-- <input style="float: right;" type="Submit" name="submit"><br> --}}
          </form><br><br>

          {{-- <textarea style="float:right"id="terms" name="terms" rows="8" cols="100" >
            These terms and conditions constitute a legally binding agreement (the “Agreement”) between you (also referred to herein as “You”, “Your” or “User”) and Bentley University ( “we” or “us”), governing your purchase of NFTs as part of the Bentley University NFT Collection Offering (the “Offering”). BY PARTICIPATING IN THIS OFFERING, YOU AGREE TO BE BOUND BY THESE TERMS AND ALL OF THE TERMS INCORPORATED HEREIN AND ALL OF THE TERMS OF SERVICE INCLUDED AS PART OF OZONE NETWORKS, INC D/B/A OPENSEA https://opensea.io/tos (the “OpenSea Terms of Service”). If you do not agree to the terms of this Agreement, as well as the OpenSea Terms of Service, you may not participate in the Offering.

By entering into this Agreement, and/or by you participating in the Bentley University NFT Offering, you expressly acknowledge that you understand this Agreement and accept all of its terms. IF YOU DO NOT AGREE TO BE BOUND BY THE TERMS AND CONDITIONS OF THIS AGREEMENT, YOU MAY NOT PARTICIPATE IN THE OFFERING
            </textarea><br><br><br><br><br><br><br><br><br><br> --}}

                    
    </div><br><br><br>
      
          
        </div><br>
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
  </div><br><br>



<!-- Footer -->
@include('includes.footer')
 

</body>
</html> 



