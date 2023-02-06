<?php
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/GenreList.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!--Importing Bootstrap v.5.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       <!--Importing Custom CSS-->
    <link rel="stylesheet" type="" href="./style.css">
    <title>PHP OOP</title>
</head>

<body class="bg-dark text-light">
    <main class="container">
        <h1 class="text-warning py-3 text-center">
            PHP OOP
        </h1>
        <hr>
        <?php
        //istanziare almeno due oggetti 'Movie' e stampare a schermo i valori delle relative proprietà
        $pansLabyrinth = new Movie('Pan\'s Labyrinth', 'spanish', new GenreList('dark fantasy', 'horror'), 'Guillermo Del Toro', '120 minutes');

        $thePaleBlueEye = new Movie('The Pale Blue Eye', 'english', new GenreList('mystery', 'thriller'), 'Scott Cooper', '128 minutes');

        //var_dump($pansLabyrinth);
        //var_dump($thePaleBlueEye);
        ?>

        <h2 class="text-center py-4">
            Movies
        </h2>


        <section class="d-flex justify-content-center pb-5">
            <div class="card bg-dark px-2 me-5 border-5" style="width: 18rem;">
                <h3 class="py-2 fw-bold text-center">
                    <?php
                    echo $pansLabyrinth->getTitle();
                    ?>
                </h3>

                <img src="https://moviesmedia.ign.com/movies/image/object/840/840477/pansposter.jpg" class="card-img-top" alt="pans labyrinth">
                <div class="card-body">
                    <p class="card-text">
                        <?php
                        foreach ($pansLabyrinth as $key => $value) {
                            if ($key === 'genre') {
                                foreach ($value as $keyGenre => $valueGenre) {
                                    echo "$keyGenre : $valueGenre </br>";
                                }
                            } else {
                                echo "$key : $value </br>";
                            }
                        }
                        //print_r ($pansLabyrinth);
                        ?>
                    </p>
                </div>
            </div>

            <div class="card bg-dark px-2 border-5" style="width: 18rem;">
                <h3 class="py-2 fw-bold text-center">
                    <?php
                    echo $thePaleBlueEye->getTitle();
                    ?>
                </h3>
                <img src="https://m.media-amazon.com/images/I/41NG6a7ZGiL.jpg" class="card-img-top" alt="the pale blue eye">
                <div class="card-body">
                    <p class="card-text">
                        <?php
                        foreach ($thePaleBlueEye as $key => $value) {
                            if ($key === 'genre') {
                                foreach ($value as $keyGenre => $valueGenre) {
                                    echo "$keyGenre : $valueGenre </br>";
                                }
                            } else {
                                echo "$key : $value </br>";
                            }
                        }

                        /*foreach ($thepaleBlueEye as $key=>$value) {
                                    echo "$key => $value </br>";
                                }*/

                        //print_r ($thePaleBlueEye);
                        ?>
                    </p>
                </div>
            </div>
        </section>
        <hr>
    </main>
    <!--Importing Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>