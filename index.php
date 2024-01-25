<?php

// require_once 'config/autoload.php';
// require_once 'config/db.php';


// intance de l'employé
// $employe = new Employe(); 
// $employe1->name = "Charly";
// $employe1->age = 33;
// $employe1->sexe = "femme";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Welcome to the zoo !</title>
</head>

<body>

    <header>
        <div class="container row">
            <div class="d-flex justify-content-start p-5">
                <h1>Welcome to the zoo</h1>
            </div>
        </div>
    </header>

    <main>

        <div class="container row d-flex justify-content-start pt-5 pb-2 px-5">
            <p><strong>Take place of Charly, create your enclosure's and choose species!</strong></p>
        </div>

        <form action="" method="post">
        <div class="container row">
            <div class="d-flex justify-content-start p-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Create enclosure</option>
                    <option value="1">Terrarium</option>
                    <option value="2">Aviary</option>
                    <option value="3">Aquarium</option>
                </select>
            </div>

            <div class="col-md-2 d-flex justify-content-start p-5">
                <button class="btn btn-primary" type="submit">Continue</button>
            </div>

            <div class="d-flex justify-content-start p-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Species</option>
                    <option value="1">Mammal</option>
                    <option value="2">Fish</option>
                    <option value="3">Birds</option>
                    <option value="4">Reptiles</option>
                    <option value="5">Amphibians</option>
                </select>
            </div>

            <div class="col-md-2 d-flex justify-content-start p-5">
                <button class="btn btn-primary" type="submit">Continue</button>
            </div>
        </div>
        </form>

    </main>

</body>

</html>