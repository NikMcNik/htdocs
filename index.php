<?php
$mysqli = new mysqli("localhost", "root", "root", "dash_of_joy", 8889);
$query = "SELECT `quote`,`author` FROM `quotes`";
$result = $mysqli->query($query);
$quotes = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello</h1>
    <ol>
        <?php
        foreach ($quotes as $row) {
        ?>
            <li>"<?= $row["quote"] ?>" &mdash;<?= $row["author"] ?></li>
        <?php
        }
        ?>
    </ol>
</body>

</html>