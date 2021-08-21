<style>
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}


</style>

<div class="w3-bar w3-theme header" id="myHeader">
    
    <a href="/NFTs" target="_blank" class="w3-bar-item w3-button w3-padding-16">NFT's</a>
    <a href="/admin/artType" class="w3-bar-item w3-button w3-padding-16">Art Type</a>
    <a href="/admin/viewCollector" class="w3-bar-item w3-button w3-padding-16">Collectors</a>
    <a href="/admin/viewCreator" class="w3-bar-item w3-button w3-padding-16">Creators</a>
    
    <div class="w3-dropdown-hover" >
      <a  href="" class="w3-button w3-padding-16">
        Data Analyst <i class="fa fa-caret-down"></i>
      </a>
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
        <a href="/admin/addDataAnalyst" class="w3-bar-item w3-button">Add Data Analyst</a>
        <a href="/admin/viewDataAnalyst" class="w3-bar-item w3-button">View Data Analyst</a>
      </div>
    </div>
    <a href="/logout" style="float:right" class="w3-bar-item w3-button w3-padding-16">Log Out</a>
</div>
    
  <script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>