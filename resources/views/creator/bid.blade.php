<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Bids</title>
</head>
<body>
    @include('includes.nav')
    @include('includes.profile')

    <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h3>Bids</h3>
            <table class="w3-table-all w3-hoverable">
                <thead>
                  <tr class="w3-light-grey">
                    <th>Creation</th>
                    <th>Date</th>
                    <th>Bid amount</th>
                    <th>Wallet Address</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tr>
                  <td>zxdeeadfasdwtyfh</td>
                  <td>08/06/2021</td>
                  <td>.15 eth</td>
                  <td>zxdeeadfasdasdawtyfh</td>
                  <td><span class="w3-tag w3-yellow">Pending</span></td>
                  <td>NA</td>
                </tr>
              </table>
              <br>
        </div>
    </div>   
</div> 
</div> 

    @include('includes.footer')
</body>
</html>     