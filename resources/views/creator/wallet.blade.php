<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Payment</title>
</head>
<body>
    @include('includes.nav')
    @include('includes.profile')
    <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <form method="post" class="w3-container" action="/wallet/{{session('userid')}}" enctype="multipart/form-data" >
                @csrf
                 <div class="w3-section">
                     <a style="color:blue"><a href="">Learn more </a> about our available payment options.
                 </div>
                 <div class="w3-section">
                    <h2>Add Digital Wallet</h2> 
                </div>
                <button type="submit" class="w3-button  w3-black">Add Wallet</button>
                <br>
                <br>
            </form>
        </div>
    </div>   



    @include('includes.footer')
</body>
</html>     