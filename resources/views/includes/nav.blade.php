<div class="w3-bar w3-theme ">
  <div class="w3-dropdown-hover"  style="float:right;margin-right:1.5%;">
    <a  href="/creator/profile/{{session('userid')}}" class="w3-button w3-padding-16">
      Profile <i class="fa fa-caret-down"></i>
    </a>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="/creator/profile/settings/{{session('userid')}}" class="w3-bar-item w3-button">Settings</a>
      <a href="/wallet/{{session('userid')}}" class="w3-bar-item w3-button">Wallet</a>
      <a href="/creator/account/{{session('userid')}}" class="w3-bar-item w3-button">Account</a>
      <a href="/logout" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
  <a href="/creator/home" class="w3-bar-item w3-button w3-padding-16 ">Marketplace</a>
  <a href="/auction" class="w3-bar-item w3-button w3-padding-16 ">Auction</a>
  <a href="/store" class="w3-bar-item w3-button w3-padding-16 ">Store</a>
  <div class="w3-searchbar  w3-bar-item w3-button w3-padding-16" style="float:right">
    <form class="w3-container" action="/creator/search" method="post">
    @csrf
    <input type="text" placeholder="Search Art " name="search">
    <button type="submit"><i class="fa fa-search"></i></button><br>
    </form>
  </div>
  <a href="/creations/{{session('userid')}}" class="w3-bar-item w3-button w3-padding-16"style="float:right;margin-right:1.5%;">Creation</a>
  <a href="/collections/{{session('userid')}}" class="w3-bar-item w3-button w3-padding-16"style="float:right;margin-right:1.5%;">Collection</a>
  
  
</div>
