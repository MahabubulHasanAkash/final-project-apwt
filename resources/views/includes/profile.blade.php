<div class="w3-content w3-margin-top" style="max-width:1400px;">
    <div class="w3-row-padding">
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
         <div class="w3-display-container">
         <img src="{{asset('upload/'.$profileImage)}}" style="width:100%" alt="Profile Image">
           <div class="w3-display-bottomleft w3-container w3-text-black">
           <h2 style="color:white">{{$name}}</h2>
       </div>
     </div>
     <br>
     <div class="w3-container">
      <div class="w3-container">
        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-black"></i>{{ucwords($usertype)}}</p>
       <!-- <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-black"></i>London, UK</p> -->
        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-black"></i>{{ucwords($email)}}</p>
        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-black"></i>{{$phone}}</p>
        <hr>
      </div>
       <a href='/creator/{{$id}}/creation/send'>Send Creations</a><br>
       <a href='/creator/{{$id}}/creation/add'>Sell Creations</a><br>
       <a href='/creator/sell/{{$id}}'>On Sell</a><br>
       <a href='/creator/auction/{{$id}}'>On Auction</a><br>
       <a href='/transactions/{{$id}}'>Sell History</a><br>
       <a href='/creator/account/{{$id}}'>Account</a><br>
       <br><br>
       </div>
   </div><br>
 </div> 