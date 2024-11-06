<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kino.php</title>
</head>
<body>
    <?php
$connect = mysqli_connect(hostname:"localhost",username: "root",password: "",database: "kino4tig1");
if(mysqli_connect_errno()){
    echo"<p>MYSQL CONNECTION FAILED</p>";
}
else{
    "<p>CONNECTION SUCCES</p>";
}

$query = "SELECT * FORM FILMY:";
if($result = mysqli_query(mysql : $connect,query: $query)){
    echo"<table style = 'border:solid 1px black'>";
echo"<tr><th>ID</th><th>Tytuł</th><th>Reżyser/th><th>Czas trwania</th></tr>";

foreach(mysqli_fetch_all(result: $result)as $row){
    echo"<tr><td>".$row[0]."<tr><td>".$row[1]."<tr><td>".$row[2]."<tr><td>".$row[3]."</td>";
}
echo"</table>";
}
mysqli_close(mysql: $connect);
    ?>
</body>
</html>