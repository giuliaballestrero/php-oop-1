
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
            $pansLabyrinth = new Movie('Pan\'s Labyrinth', 'spanish', new GenreList('dark fantasy','horror'), 'Guillermo Del Toro', '120 minutes');

            $thePaleBlueEye = new Movie('The Pale Blue Eye', 'english', new GenreList('mystery', 'thriller'), 'Scott Cooper', '128 minutes');

            var_dump($pansLabyrinth);
            var_dump($thePaleBlueEye);
        ?>
        
        <h2>
            Movies
        </h2>

        <h3>
            <?php 
                echo $pansLabyrinth->getTitle();
            ?>
        </h3>
        <p>
            <?php
                foreach ($pansLabyrinth as $key=>$value) {
                    if ($key === 'genre') {
                        foreach ($value as $keyGenre => $valueGenre) {
                            echo "$keyGenre => $valueGenre </br>";
                        }
                    }

                    else {
                       echo "$key => $value </br>"; 
                    }
                }

                //print_r ($pansLabyrinth);

            ?>
        </p>
        
        <h3>
            <?php 
                echo $thePaleBlueEye->getTitle();
            ?>
        </h3>

        <p>
            <?php 

                foreach ($thePaleBlueEye as $key=>$value) {
                    if ($key === 'genre') {
                        foreach ($value as $keyGenre => $valueGenre) {
                            echo "$keyGenre => $valueGenre </br>";
                        }
                    }

                    else {
                    echo "$key => $value </br>"; 
                    }
                }

                /*foreach ($thepaleBlueEye as $key=>$value) {
                    echo "$key => $value </br>";
                }*/

                //print_r ($thePaleBlueEye);
            ?>
        </p>

    </main>
    
</body>
</html>