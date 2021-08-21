
<div class="w3-quarter">
      
    <div class="w3-white w3-text-grey w3-card-4">
      <div class="w3-display-container"><br>
        <p class="w3-center"><img src="{{asset('upload/'.session('profileImage'))}}" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
        <div class="w3-display-bottomcenter w3-container w3-text-black">
          
          
          <h4 style="text-align: center"> </h4><br>
        </div>
      </div>
      <div class="w3-container">
        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Admin</p>
        <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>{{session('name')}}</p>
        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{session('useremail')}}</p>
        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{session('phone')}}</p>
        
        <hr>

        
        <div class="w3-bar-block">
          <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
          <a href="/admin/home" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Dash Board</a>
          <a href="/admin/editProfile/{id}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-edit fa-fw"></i>  Edit Profile</a>
          <a href="/admin/adminPanel" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Admin Panel</a>
          <a href="/admin/announcement" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Announcement</a> 
          <a href="/admin/terms" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Terms & Conditions</a><br><br>
        </div>
      </div>
    </div><br><br><br><br>

  <!-- End Left Column -->
  </div>