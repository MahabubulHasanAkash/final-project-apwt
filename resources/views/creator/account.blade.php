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
    <br><br><br>
    <div class="w3-twothird " style="margin-left:2%">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <div class="w3-card-4 w3-container">
                <h2>Account</h2>
                <ul class="w3-ul w3-margin-bottom">
                  <li>Balance: {{$balance}}</li>
                  <li>Public Key: {{$accountKey}}</li>
                </ul>
                <br>
                <br>
                <br>
               <a href="/transactions/{{$id}}"> View Transactions</a>
               <br>
                <br>
        </div>
    </div>   



    @include('includes.footer')
</body>
</html>     