<?php

require_once('./config/db.php');
require_once('./class/zoo/zoo.php');
require_once('./class/zoo/zooManager.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Zoo-refuge</title>
</head>

<body>

    <header>
        <div class="container row">
            <div class="d-flex justify-content-start pt-5 pb-3 px-5">
                <h1>Welcome to the zoo-refuge!</h1>
            </div>
        </div>
    </header>

    <main>

        <div class="container row d-flex justify-content-start pb-5 px-5">
            <p><strong>1st step: Choose the name of your zoo and choose the number of enclosures!</strong></p>
        </div>

        <form action="./treatment/treatment_zoo.php" method="post">
            <div class="d-flex justify-content-start row px-5">

                <div class="name d-flex justify-content-start pt-5 pb-2">
                    <input type="text" placeholder="Zoo name" name="zooName" class="px-2 rounded-2 border border-dark-subtle">
                </div>

                <div class="col-md-3 d-flex justify-content-start pt-5 pb-2">
                    <select class="form-select" aria-label="Default select example" name="maxEnclosure">
                        <option selected>Choose the number of enclosures</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5">6</option>
                    </select>
                </div>

                <div class="d-flex justify-content-start pt-5">
                    <button class="btn btn-primary" type="submit" href="./employe_interface.php">To validate</button>
                </div>
            </div>
        </form>

    </main>
</body>

</html>