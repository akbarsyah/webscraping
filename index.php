<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Scraping Game Diskon</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <!--NAVBAR-->

    <nav class="navbar navbar-light bg-white" style="height:100px;">
        <a class="navbar-brand" href="index.php">
            <img src="logos.png" width="80" height="60" class="d-inline-block align-top" alt="">
            <b style="font-size:35px;">Scraping Steam Store</b>
        </a>
    </nav>

    <!--NAVBAR-->
    

    <!--CONTENT-->

    <?php
    include 'connect.php';
    $query="SELECT * FROM steam_table";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
            echo "<th>Nama Game</th>";
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

    <!--CONTENT-->

</body>
</html>