<!doctype html>
<html>
<head>
    <!-- Website Template by freewebsitetemplates.com -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH EMPLOYEE - RC Charter Company</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 568px)">
    <script type="text/javascript" src="js/mobile.js"></script>
    <style>
        #submit {
            margin-top: 40px;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: 600;
            font-family: 微軟正黑體, sans-serif;
            background: -webkit-linear-gradient(left, #FFFFFF, #FFFFFF);
        }
    </style>
</head>
<body>
    <div id="header" style="background-color:#FFD382; padding:10px; width:1490px; height:250px;">
        <br>
        <center>
            <img src="https://image.flaticon.com/icons/svg/1358/1358770.svg" width="150">
        </center>
        <br>
        <center>
            <font size="6" face="monospace">
                <u><b>Welcome To Charter Company</b></u> :)
            </font>
        </center>
    </div>
    <ul id="navigation">
        <li><a href="index.php">HOME</a></li>
        <li><a href="employee.php">EMPLOYEE</a></li>
        <li><a href="charter_trip.php">CHARTER_TRIP</a></li>
        <li><a href="aircraft.php">AIRCRAFT</a></li>
        <li class="selected"><a href="search_e.php">SEARCH_EMPLOYEE</a></li>
        <li><a href="search_c.php">SEARCH_CHARTER</a></li>
    </ul>
    <div id="footer" style="margin-left:-9px; width:1519px; height:1050px; background-color:#FFF4C1;">
        <br/><br/>
        <form action="searchcheck_e.php" method="POST">
            <h1>
                <center>
                    <font size="3" face="monospace">
                        <b>Employee ID Search: <input type="text" name="Employee_ID"></b>
                    </font>
                </center>
            </h1>
            <center>
                <input type="submit" name="submit" value="Submit" id="submit">
            </center>
        </form>
    </div>
</body>
</html>
