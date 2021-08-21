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


    
    
<body class="w3-light-grey">
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
          <form class="w3-container" action="/admin/searchActivity" method="post" style="float:right">
            @csrf
            <input type="text" placeholder="Search Activity " name="search">
            <button type="submit"><i class="fa fa-search"></i></button><br>
            </form><br><br><br>
        <p class="fa fa-dashboard w3-large"> Dash Board</p> <br> <br> 
          <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
              <div class="w3-left"><i class="fa fa-paint-brush w3-xxxlarge"></i></div>
              <div class="w3-right">
                <h3>99</h3>
              </div>
              <div class="w3-clear"></div>
              <h4>Art</h4>
            </div>
          </div>
          <div class="w3-quarter" >
            <div class="w3-container w3-teal w3-padding-16">
              <div class="w3-left"><i class="fa fa-music w3-xxxlarge"></i></div>
              <div class="w3-right">
                <h3>23</h3>
              </div>
              <div class="w3-clear"></div>
              <h4>Music</h4>
            </div>
          </div>
          <div class="w3-quarter" >
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
              <div class="w3-left"><i class="fa fa-film w3-xxxlarge"></i></div>
              <div class="w3-right">
                <h3>50</h3>
              </div>
              <div class="w3-clear"></div>
              <h4>Videos</h4>
            </div>
          </div>
            <div class="w3-quarter" >
              <div class="w3-container w3-dark-grey w3-padding-16">
                <div class="w3-left"><i class="fa fa-signal w3-xxxlarge"></i></div>
                <div class="w3-right">
                  <h3>2</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Others</h4>
              </div>
            
          </div><br>
          
          
          <div class="w3-container w3-padding "><br><br><br>
            
            <h6 class="w3-opacity">Recent Activity</h6>
            <table>
              <tr>
                <th>Creator ID</th>
                <th>Owner ID</th>
                <th>Item Name</th>
                <th>Creation Date</th>
                <th>Value</th>
                
                
              </tr>
              
              @foreach ($activityList as $activities) 
            <tr>
                  <td>{{$activities->creator_id}}</td>
                  <td>{{$activities->owner_id}}</td>
                  <td>{{$activities->name}}</td>
                  <td>{{$activities->creation_date}}</td>
                  <td>{{$activities->value}}</td>
                  {{-- <td><p class="w3-center"><img src="{{asset('upload/'.session('image'))}}" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p></td> --}}
                  
                  
              @endforeach
            
          </tr>
            
         
            </table><br><br>
          </div><br>
        </div>
    </div>
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

<!--
.callout {
  position: fixed;
  bottom: 35px;
  right: 900px;
  margin-left: 20px;
  max-width: 300px;
}

.callout-header {
  padding: 25px 15px;
  background: #555;
  font-size: 30px;
  color: white;
}

.callout-container {
  padding: 15px;
  background-color: #ccc;
  color: black
}

.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}


<div class="callout">
                <div class="callout-header">Callout Header</div>
                <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
                <div class="callout-container">
                  <p>Some text to describe the callout message. <a href="#">Learn more</a> or close it if it is in your way.</p>
                </div>
              </div>-->
              
