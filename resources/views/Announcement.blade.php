<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @include('includes.head')
   <style>
        body {
            padding: 0;
            margin: 0;
        }

        #card {
            position: fixed;
            top: 50%;
            left: 70%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 120%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>

<body>
    @include('includes.header')
    <div class="row row justify-content-md-center mt-3">
        <div class="col-md-6">
            <div class="row justify-content-md-center">
                <label style="font-size: xx-large;">Announcements</label>
            </div>
            
                <table>
                    <tr>
                      <th>Title</th>
                      <th>Details</th>    
                      
                    </tr> 
                    @foreach ($announcementList as $announcements) 
      
                  <tr>
                    
                  <td>{{$announcements['title']}}</td>
                        <td>{{$announcements['details']}}</td>
                      </tr>
                  
                  
                  
                  @endforeach
                                  
                  </table><br><br>
            
            <div class="w3-container w3-padding "><br>
                
                </div>
            

        </div>
    </div>

</body>

</html>