<!doctype html>
<html>
<head>
    <!-- Website Template by freewebsitetemplates.com -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH CHARTER TRIP RESULT - RC Charter Company</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 568px)">
    <script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
    <?php
    // Database connection
    $link = mysqli_connect('localhost', 'root', 'love520322', 'a1073317');

    if (!$link) {
        die('Database connection failed: ' . mysqli_connect_error());
    }

    // Get Charter_trip_ID from form
    $Charter_trip_ID = $_POST["Charter_trip_ID"];

    // SQL query
    $SQL = "SELECT * FROM charter_trip WHERE Charter_trip_ID='$Charter_trip_ID'";
    echo "<center><br/></br></br></br>";

    if ($result = mysqli_query($link, $SQL)) {
        echo '<table border="2" cellpadding="15">';
        echo '<tr>';
        echo '<th>編號</th>';
        echo '<th>目的地</th>';
        echo '<th>日期</th>';
        echo '<th>時間</th>';
        echo '</tr>';

        // Fetch rows and display
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Charter_trip_ID'] . '</td>';
            echo '<td>' . $row['Destination'] . '</td>';
            echo '<td>' . $row['Date'] . '</td>';
            echo '<td>' . $row['Time'] . '</td>';
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
