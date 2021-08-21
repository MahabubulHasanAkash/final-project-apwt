<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Place</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand mr-auto" href="#">NFTPlace</a>

            <a href="/logout" class="btn btn-outline-warning text-black">Logout</a>
        </div>
    </nav>

    <div class="row pl-3 pr-3">
        <div class="col-md-2 side-bar">
            <div class="row">
                <img id="profile_image" src="{{ asset('images').'/'.session('user')->image }}" alt="sss">
            </div>
            <div class="row justify-content-center">
                <label class="">{{ session('user')->name }}</label>
            </div>
            <div class="row justify-content-center">
                <label class="">{{ session('user')->email }}</label>
            </div>
            <hr>
            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <div class="pb-2">Information</div>
                <a class="link active" href="{{ URL::to('/analitycs/product') }}">Product</a>
                <a class="link" href="{{ URL::to('/analitycs/sales') }}">Sales</a>
                <a class="link" href="{{ URL::to('/analitycs/inventory') }}">Inventory</a>
                <a class="link" href="{{ URL::to('/analitycs/demands') }}">Demand</a>

                <div class="pt-3 pt-2 pb-2">Outliner</div>
                <a class="link" href="{{ URL::to('/analitycs/contact') }}">Tag Outliner</a>

                <div class="pt-3 pt-2 pb-2">Compare</div>
                <a class="link" href="{{ URL::to('/analitycs/competitor') }}">Compare with Competitor</a>

                <div class="pt-3 pb-2">Report</div>
                <a class="link" href="{{ URL::to('/analitycs/breakdown') }}">Product Breakdown</a>
                <a class="link" href="{{ URL::to('/analitycs/sales_report') }}">Sales</a>
                <!-- <a class="link" href="#v-pills-messages">Mail Report</a> -->

                <div class="pt-3 pb-2">General</div>
                <a class="link" href="{{ URL::to('/analitycs/members/list') }}">Members</a>
                <a class="link" href="{{ URL::to('/analitycs/members/create') }}">Add Members</a>
                <a class="link" href="{{ URL::to('/analitycs/contact') }}">Connect with admin</a>

            </div>
        </div>
        <div class="col-md-10 main-content">
            <div class="container">

                <div id="chart-container"></div>
                <br>
                <div id="chart-compi-container"></div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>


    <script>
        $(document).ready(function() {
            $('.link').click(function(e) {
                $('.active').removeClass('active');
                var $this = $(this);
                if (!$this.hasClass('active')) {
                    $this.addClass('active');
                }
                // e.preventDefault();
            });
        });
    </script>



    <script>
        var datas = <?php echo json_encode($datas) ?>;
        var compis = <?php echo json_encode($compis) ?>;

        Highcharts.chart('chart-container', {
            title: {
                text: 'Our user Growth'
            },
            subtitle: {
                text: ""
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Number of new User'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New User',
                data: datas
            }],
            resposive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chatsOptions: {
                        legend: {
                            layout: "horizontal",
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
        Highcharts.chart('chart-compi-container', {
            title: {
                text: 'competitor user Growth'
            },
            subtitle: {
                text: ""
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Number of new User'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New User',
                data: compis
            }],
            resposive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chatsOptions: {
                        legend: {
                            layout: "horizontal",
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        })
    </script>

</body>

</html>