<?php 

    session_start();

    if (isset($_GET['length'])) {
        
        $passwordLength = (int) $_GET['length'];
    }

    require './functions.php'

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Password Generator</title>
</head>
<body>

    <div class="d-flex flex-column align-items-center">
        <form action="" method="GET" >
         <div class="mb-3 mt-5">
             <label for="exampleInputPassword1" class="form-label">Password length</label>
             <input type="number" class="form-control" id="exampleInputPassword1" name="length" min='8' max='30' >
         </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="parking">
                <label class="form-check-label" for="exampleCheck1">Parking</label>
            </div> -->
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>

        <a href="./result.php">Visualizza la password</a>

        <?php
        
            passwordGen($passwordLength);

        ?>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>