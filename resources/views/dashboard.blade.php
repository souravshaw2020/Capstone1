<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        body{
            background-color: #646464;
        }
        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }
        .th{
            text-align: center;
        }
         .buttons{
         border-color: #0A0C25 ;
         padding: 0em;
         text-align: center;
         background-color: white;
         font-family: 'Poppins', sans-serif;
         width:9em;
         height:4em;
         border-radius: 5px;
         }
        .buttons:hover{
            background-color: #0A0C25;
            color:white;
            border-radius: 5px;
        }
        th,thead{
            border:solid grey;
            font-family: 'Poppins', sans-serif;
        }
        table{
            border:solid grey;
        }
        td{
            border-left: solid grey;
            font-family: 'Roboto', sans-serif;
        } 
    </style>
</head>
<body>
    <div>
        <div class="col-12" style="
    background-color: white;
    color: black;
    text-align: center;
    padding: 1.5em;">
        <img src="niit.jpg" alt="logo" align="left" width="130em" height="75em">
        <strong><h1>WELCOME <span style="color: red;">ADMINISTRATOR</span></h1></strong>      
    </div>
        <div class="row">
            <div class="col-12">
                <div style="background-color: lavender; padding: 1.5em;">
                <button onclick="location.href='{{ url('dashboard/') }}'" type="button" class="button buttons">
                    <i class="fa fa-list-alt"></i><br> DASHBOARD
                </button>
                <button onclick="location.href='{{ url('visitorform/') }}'" type="button" class="button buttons">
                    <i class="fa fa-user-plus"></i><br> VISITOR FORM
                </button>
                <button type="button" class="button buttons">
                    <i class="fa fa-check"></i><br> VISITOR INFO
                </button>
                <button onclick="location.href='{{ url('logout') }}'" type="button" class="button buttons">
                    <i class="fa fa-sign-out"></i><br> LOGOUT
                </button>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 0.50em; margin-left: 0.15em; margin-right: 0.15em;">
            <div class="col-sm-12">
                <div style="background-color: white; border: #161616 solid 0.35em;">
                    <div style="background-color: #0A0C25; color: #ffffff; padding:0.50em; margin: 0.35em;">
                        <h2>RECENT GATEPASSES</h2>
                    </div>
                    <div style="background-color: lavender; color: #0A0C25; padding:0.25em; margin: 0.35em;">
                        <div class="table-responsive">
                        <table class="table" style="text-align: center;">
                            <thead >
                                <tr>
                                    <th>SL NO.</th>
                                    <th>VISITOR NAME</th>
                                    <th>PURPOSE OF VISIT</th>
                                    <th>DEPARTURE ON</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($details as $detail)
                                    <tr>
                                        <td>{{ $detail->id }}</td>
                                        <td>{{ $detail->visitor_name}}</td>
                                        <td>{{ $detail->purpose }}</td>
                                        <td>{{ $detail->departure_time }}</td>
                                        <td>OUT</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>