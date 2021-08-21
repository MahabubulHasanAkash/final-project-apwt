{{-- <!DOCTYPE html>
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

    <!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
          <div class="w3-container">
           <h4 class="w3-center">My Profile</h4>
           <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
           <hr>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
           <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
           <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
          </div>
        </div>
        <br>
        
        <!-- Accordion -->
        <div class="w3-card w3-round">
          <div class="w3-white">
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
            <div id="Demo2" class="w3-hide w3-container">
              <p>Some other text..</p>
            </div>
            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
            <div id="Demo3" class="w3-hide w3-container">
           <div class="w3-row-padding">
           <br>
             <div class="w3-half">
               <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
           </div>
            </div>
          </div>      
        </div>
        <br> 
        
      
      <!-- End Left Column -->
      </div>

      <div class="w3-col m7">
    
        <div class="w3-row-padding">
          <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">
              <div class="w3-container w3-padding">
                <h6 class="w3-opacity">Social Media template by w3.css</h6>
                <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
                <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
              </div>
            </div>
          </div>
        </div>
      </div>

    
</body>
@include('includes.footer')
</html> --}}

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
    @include('includes.nav');
    
<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
  
    <!-- The Grid -->
    <div class="w3-row-padding">
    
      <!-- Left Column -->
      @include('includes.adminSideBar');
  
      <!-- Right Column -->
      <div class="w3-twothird">
  
        @include('includes.adminButton')
           
                        
          </div><br><br>
          
            
          </div><br>
          
          
        </div>
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
  </div><br>



<!-- Footer -->
@include('includes.footer')
 

</body>
</html> 



