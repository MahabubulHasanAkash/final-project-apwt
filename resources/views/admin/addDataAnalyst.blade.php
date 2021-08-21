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
    @include('includes.adminNav')<br>
    


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
            <br>
        </div><br><br><br>

        <p class="fa fa-edit w3-large"> Add Data Analyst</p> <br> <br> 
        <h3 style="color: green">
          {{session('msg')}}
      </h3><br>
      <h4 style="color: red">
      @if (isset($errors))
          @foreach ($errors->all() as $error)
              {{$error}} <br>
           @endforeach
      @endif
      </h4>
      

        <form action="/admin/addDataAnalyst" method="post" >
            @csrf
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="name" name="name" placeholder="Name" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="email" name="email" placeholder="Email address" type="email" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="password" name="password" placeholder="Password" type="password" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="password_confirmation'" name="password_confirmation'" placeholder="Confirm password" type="password" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <button  class="btn btn-block" value="Signup" style="background:black; color: white; font-weight:bold">Signup </button>
                </div>
            </div>
        </form>
               
        <br><br>
            <br><br><br><br>
          </div>
        </div>
      </div><br>
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



