<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Scraping Game Diskon</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    blink{
        color: #1c879;
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
    }
    table, th, td{
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <b><h1><center>Scraping Steam Store</center></h1></b>
    <?php
    include 'connect.php';
    $query="SELECT * FROM steam_table";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
            echo "<th>Game Name</th>";
            echo "<th>Diskon</th>";
            echo "<th>Harga Awal</th>";
            echo "<th>Harga Diskon</th>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['game_name'] . "</td>";
                echo "<td>" . $row['diskon'] . "</td>";
                echo "<td>" . $row['harga_awal'] . "</td>";
                echo "<td>" . $row['harga_diskon'] . "</td>";
        }
        echo "</table>";
    }
    ?>    
</body>
</html>