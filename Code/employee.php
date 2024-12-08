<!doctype html>
<html>
<head>
    <!-- Website Template by freewebsitetemplates.com -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE - RC Charter Company</title>
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
        <li class="selected"><a href="employee.php">EMPLOYEE</a></li>
        <li><a href="charter_trip.php">CHARTER_TRIP</a></li>
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
    $SQL = "SELECT * FROM employee";
    echo "<center><br/><br/><br/></center>";

    if ($result = mysqli_query($link, $SQL)) {
        echo '<table border="2" cellpadding="15">';
        echo '<tr>';
        echo '<th>編號</th>';
        echo '<th>姓名</th>';
        echo '<th>性別</th>';
        echo '<th>生日</th>';
        echo '<th>職位</th>';
        echo '<th>訓練記錄</th>';
        echo '<th>醫療證明</th>';
        echo '</tr>';

        // Fetch rows and display
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Employee_ID'] . '</td>';
            echo '<td>' . $row['Name'] . '</td>';
            echo '<td>' . $row['Sex'] . '</td>';
            echo '<td>' . $row['Bdate'] . '</td>';
            echo '<td>' . $row['Position'] . '</td>';
            echo '<td>' . $row['Train'] . '</td>';
            echo '<td>' . $row['Medical'] . '</td>';
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
