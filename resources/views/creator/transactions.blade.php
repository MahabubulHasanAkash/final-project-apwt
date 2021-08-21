<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Transactions</title>
</head>
<body>
    @include('includes.nav')
    <br><br><br>
    <div class=" " style="margin-left:2%">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <div class=" w3-container">
                <h2>Transactions</h2>
                <table class="w3-table w3-striped w3-bordered">
                  <thead>
                  <tr class="w3-theme">
                    <th><span>Block<span></th>
                    <th>Date</th>
                    <th>Sender Key</th>
                    <th>Recever Key</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($transactions as $trans)
                    <tr>
                      <td>{{$trans->block}}</td>
                      <td>{{$trans->datetimestamp}}</td>
                      <td>{{$trans->senderKey}}</td>
                      <td>{{$trans->receverKey}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
        </div>
    </div>   



    @include('includes.footer')
</body>
</html>     