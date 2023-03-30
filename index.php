<!-- PHP -->
<?php
    require_once __DIR__ . "./database/db.php"; //importo il database
    require_once __DIR__ . "./models/Movie.php"; //includo la classe "Movie"
    $movie1 = new Movie($movies[0]["title"], $movies[0]["original_title"], $movies[0]["country"], $movies[0]["description"], $movies[0]["genres"]); //creo un'istanza di classe "Movie"
    $movie2 = new Movie($movies[1]["title"], $movies[1]["original_title"], $movies[1]["country"], $movies[1]["description"], $movies[1]["genres"]); //creo un'istanza di classe "Movie"
    var_dump($movie1); //stampa della istanza di classe
    var_dump($movie2); //stampa della istanza di classe
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP OOP1</title>
</head>
<body>
    
</body>
</html>