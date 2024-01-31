<?php

// require_once 'config/autoload.php';
require_once 'config/db.php';

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
                <h1>Create your enclosures!</h1>
            </div>
        </div>
    </header>

    <main>

        <div class="container row d-flex justify-content-start pb-5 px-5">
            <p><strong>Choose the name of your enclosure, the type, the number and species!</strong></p>
        </div>

        <form action="./class/EnclosureManager.php" method="post">
            <div class="d-flex justify-content-start row px-5">
                <div class="name d-flex justify-content-start pt-5 pb-2">
                    <input type="text" placeholder="Name of your enclosure" name="nameEnclosure" class="px-2 rounded-2 border border-dark-subtle">
                </div>
            </div>

            <div class="container row">
                <div class="col-9 d-flex justify-content-start pt-5 pb-2 px-5">
                    <select class="form-select" aria-label="Default select example" name="typeEnclosure" class="border-1">
                        <option selected>Choose enclosure</option>
                        <option value="1">Terrarium</option>
                        <option value="2">Aviary</option>
                        <option value="3">Aquarium</option>
                    </select>
                </div>

                <div class="col-9 d-flex justify-content-start pt-5 pb-2 px-5">
                    <select class="form-select" aria-label="Default select example" name="maxAnimals">
                        <option selected>Number of animals</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5">6</option>
                    </select>
                </div>

                <div class="col-9 d-flex justify-content-start pt-5 pb-2 px-5">
                    <select class="form-select" aria-label="Default select example" name="species">
                        <option selected>Species</option>
                        <option value="1">Mammal</option>
                        <option value="2">Fish</option>
                        <option value="3">Birds</option>
                        <option value="4">Reptiles</option>
                        <option value="5">Amphibians</option>
                    </select>
                </div>

                <div class="d-flex justify-content-start pt-5 px-5">
                    <button class="btn btn-primary" type="submit" href="./index.php">To validate</button>
                </div>
            </div>
        </form>

    </main>
</body>

</html>