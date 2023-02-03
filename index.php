
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
    <title>PHP OOP</title>
</head>
<body>
    <main>
        <h1>
            PHP OOP
        </h1>
        <?php 
            //istanziare almeno due oggetti 'Movie' e stampare a schermo i valori delle relative proprietà
            $movie1 = new Movie('Pan\'s Labyrinth', 'spanish', new GenreList('dark fantasy','horror'), 'Guillermo Del Toro', '120 minutes');

            $movie2 = new Movie('The Pale Blue Eye', 'english', new GenreList('mystery', 'thriller'), 'Scott Cooper', '128 minutes');

            var_dump($movie1);
            var_dump($movie2);
        ?>
        
        <h2>
            Movies
        </h2>

        <h3>
            <?php 
                echo $movie1->getTitle();
            ?>
        </h3>
        <p>
            <?php

                /*foreach ($movie2 as $key=>$value) {
                    echo "$key => $value </br>";
                }*/

               print_r ($movie1);
            ?>
        </p>
        
        <h3>
            <?php 
                echo $movie2->getTitle();
            ?>
        </h3>

        <p>
            <?php 

                /*foreach ($movie2 as $key=>$value) {
                    echo "$key => $value </br>";
                }*/

                print_r ($movie2);
            ?>
        </p>

    </main>
    
</body>
</html>