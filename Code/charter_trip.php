<!doctype html>
<html>
<head>
    <!-- Website Template by freewebsitetemplates.com -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHARTER_TRIP - RC Charter Company</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 568px)">
    <script type="text/javascript" src="js/mobile.js"></script>
    <style>
        /* Add any additional inline styles here */
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
        <li class="selected"><a href="charter_trip.php">CHARTER_TRIP</a></li>
        <li><a href="aircraft.php">AIRCRAFT</a></li>
        <li><a href="search_e.php">SEARCH_EMPLOYEE</a></li>
        <li><a href="search_c.php">SEARCH_CHARTER</a></li>
    </ul>

    <?php
    // Database connection
    $link = mysqli_connect('localhost', 'root', 'love520322', 'a1073317');

    if (!$link) {
        die('Database connection failed: ' . mysqli_connect_error());
    }

    // SQL query
    $SQL = "SELECT * FROM charter_trip";
    echo "<center><br/><br/><br/></center>";

    if ($result = mysqli_query($link, $SQL)) {
        echo '<table border="2" cellpadding="15">';
        echo '<tr>';
        echo '<th>航班編號</th>';
        echo '<th>出發地</th>';
        echo '<th>目的地</th>';
        echo '<th>出發時間</th>';
        echo '<th>到達時間</th>';
        echo '<th>飛機編號</th>';
        echo '</tr>';

        // Fetch rows and display
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Trip_ID'] . '</td>';
            echo '<td>' . $row['Origin'] . '</td>';
            echo '<td>' . $row['Destination'] . '</td>';
            echo '<td>' . $row['Departure_Time'] . '</td>';
            echo '<td>' . $row['Arrival_Time'] . '</td>';
            echo '<td>' . $row['Aircraft_ID'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '無資料';
    }

    echo "</center>";
    ?>
</body>
</html>
