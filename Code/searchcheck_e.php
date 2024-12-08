<!doctype html>
<html>
<head>
    <!-- Website Template by freewebsitetemplates.com -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH EMPLOYEE RESULT - RC Charter Company</title>
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

    // Get Employee_ID from form
    $Employee_ID = $_POST["Employee_ID"];

    // SQL query
    $SQL = "SELECT * FROM employee WHERE Employee_ID='$Employee_ID'";
    echo "<center><br/></br></br></br>";

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
