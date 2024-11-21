<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kino.php</title>
</head>
<body style="color:antiquewhite;">
    <br><br>
    <?php

    $connect = mysqli_connect("localhost", "root", "", "kino4tig1");
    
    if (mysqli_connect_errno()) {
        echo "<p>MYSQL CONNECTION FAILED</p>";
    } else {
        echo "<p>CONNECTION SUCCESS</p>";
    }

    $query = "SELECT * FROM FILMY";
    
    if ($result = mysqli_query($connect, $query)) {
        echo "<table style='border: solid 1px black'>";
        echo "<tr><th>ID</th><th>Tytuł</th><th>Reżyser</th><th>Czas trwania</th></tr>";

        foreach (mysqli_fetch_all($result) as $row) {
            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
        }
        echo "</table>";
    }

    mysqli_close($connect);
    ?>
</body>
</html>