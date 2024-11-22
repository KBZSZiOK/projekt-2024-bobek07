<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie filmu</title>
    <link rel="stylesheet" href="kino1.css">
</head>
<body style="text-align: center;">
    <br>
    <h3 style="color: antiquewhite;">Dodawanie danych do tabeli</h3>
     <form style="color:antiquewhite;" method="POST">
        <label for="title" >Tytuł:</label><br>
        <input type="text" id="title" name="tytuł" required><br><br>

        <label for="director">Reżyser:</label><br>
        <input type="text" id="director" name="reżyser" required><br><br>

        <label for="duration">Czas Trwania (minuty):</label><br>
        <input type="number" id="duration" name="czas" required><br><br>

        <input type="submit" value="Dodaj Film" name="wyślij">
        <?php

        $connect = mysqli_connect("localhost", "root", "", "kino4tig1");
    
    if (mysqli_connect_errno()) {
        echo "<p>MYSQL CONNECTION FAILED</p>";
    } else {
        echo "<p>CONNECTION SUCCESS</p>";
    }
    
        if (isset($_POST['wyślij'])) {
            $tytuł = $_POST['tytuł'];
            $reżyser = $_POST['reżyser'];
            $czas = $_POST['czas'];
    
            $sql = "INSERT INTO FILMY (Tytuł, Reżyser, `Czas_trwania(min)_`)
                    VALUES ('$tytuł', '$reżyser', $czas)";
            if (mysqli_query($connect, $sql)) {
                echo "<p>Nowy rekord został dodany!</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . mysqli_error($connect) . "</p>";
            }
    
            mysqli_close($connect);
        }
        
            echo "Podaj wszystkie dane!!";
        
        ?>
</body>
</html>