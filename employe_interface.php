<?php

require_once('./config/db.php');
require_once('./class/zoo/zoo.php');
require_once('./class/zoo/zooManager.php');



// intance du zoo

// var_dump($zoo);

// $employe = new employe();



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
            <p><strong>2nd step: Take the place of the employe, create your person!</strong></p>
        </div>

        <form action="./treatment/treatment_employe.php" method="post">
            <div class="d-flex justify-content-start row px-5">
                <div class="name d-flex justify-content-start pt-5 pb-2">
                    <input type="text" placeholder="Your name" name="yourName" class="px-2 rounded-2 border border-dark-subtle">
                </div>

                <div class="name d-flex justify-content-start pt-5 pb-2">
                    <input type="text" placeholder="Your age" name="yourAge" class="px-2 rounded-2 border border-dark-subtle">
                </div>
                <div class="col-md-3 d-flex justify-content-start pt-5 pb-2">
                    <select class="form-select" aria-label="Default select example" name="yourGender" class="px-2 rounded-2 border border-dark-subtle">
                        <option selected>Your gender</option>
                        <option value="1">Woman</option>
                        <option value="2">Men</option>
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