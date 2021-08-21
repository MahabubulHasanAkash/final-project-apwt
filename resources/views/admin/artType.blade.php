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
    
<body class="w3-light-grey">

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
            <input type="text" placeholder="Search Art Type " name="search">
            <button type="submit"><i class="fa fa-search"></i></button><br>
            </form><br><br><br>   
          
        <p class="fa fa-edit w3-large"> Art Type</p> <br> <br>  
        <form method="post">
            @csrf
            <h6 class="w3-opacity">Add Art Types</h6>
              <table>
                  <tr>
                      <td><b>Art Type Name</b></td>
                      <td><input type="text" class="form-control" name="t_name" value=""></td>
                      
                  </tr>
                  
              </table><br><input style="float: right;" type="Submit" name="submit"><br>
            
              </form><br>
          
        
  
                   
            <div class="w3-container w3-padding "><br>
             
              <h6 class="w3-opacity">Art Types</h6>
              
              <table>
                <tr>
                  <th>Art Type</th>
                  <th>Action</th>
  
                </tr> 
                @foreach ($artTypeList as $artTypes) 
  
              <tr>
                
              <td>{{$artTypes->t_name}}</td>
              
              
              <td>   
                  <a href="/admin/artType/edit/{{$artTypes->t_id}}"> Edit</a> |
                  <a href="/admin/artType/delete/{{$artTypes->t_id}}"> Delete</a>
                  
                  
              </td>
                  </tr>
              
              
              
              @endforeach
                              
              </table><br><br>
              <br><br><br><br>
            </div>
      </div><br><br>
                
    </div>
          
            
          </div><br>
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



