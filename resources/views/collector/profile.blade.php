<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="{{asset('css/profile.css')}}">
</head>
<body>

	@include('includes.col_nav')
	<!--<form action="../php/profile_picturecheck.php" method="post" enctype="multipart/form_data">-->


	<div class="card">

		<img src="images/imgmale.png" alt="John" style="width:95%">
		<h1>{{$user->name}}</h1>
		<p class="title">{{$user->usertype}}</p>
		<div class="info"><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;{{$user->email}}</div>
		<div class="info"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;{{$user->phone}}</div>
		<div class="info"><i class="fas fa-birthday-cake"></i>&nbsp;&nbsp;{{$user->dob}}</div>
		<div class="info"><i class="fas fa-venus-mars"></i>&nbsp;&nbsp;{{$user->gender}}</div>
		<div class="info"><i class="fas fa-map-marked"></i>&nbsp;&nbsp;{{$user->address}}</div>
		<div class="info"><i class="fas fa-user-edit"></i><a href="/collector/profileUpdate">o</a>Update</div>
	</div>


</body>
</html>