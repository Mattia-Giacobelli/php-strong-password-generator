<?php

session_start();

$password = $_SESSION['password'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <h1>
        <?php

        echo "La tua password è: $password "

        ?>
    </h1>
</body>

</html>