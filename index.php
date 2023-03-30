<!-- PHP -->
<?php
    require_once __DIR__ . "./models/Movie.php"; //includo la classe "Movie"
    //Lista di film
    $movie_list = [
        [
            "title" => "Ritorno al futuro", //titolo del film
            "original_title" => "Back to The Future", //titolo originale del film
            "country" => "USA", //paese del film
            "description" => "Lorem Ipsum", //descrizione del film
            "genres" => ["Azione", "Commedia", "Fantascienza"] //generi del film
        ],
        [
            "title" => "Spider-Man", //titolo del film
            "original_title" => "Spider-Man", //titolo originale del film
            "country" => "USA", //paese del film
            "description" => "Lorem Ipsum", //descrizione del film
            "genres" => ["Azione", "Commedia"] //generi del film
        ]
    ];
    $movie1 = new Movie($movie_list[0]["title"], $movie_list[0]["original_title"], $movie_list[0]["country"], $movie_list[0]["description"], $movie_list[0]["genres"]); //creo un'istanza di classe "Movie"
    $movie2 = new Movie($movie_list[1]["title"], $movie_list[1]["original_title"], $movie_list[1]["country"], $movie_list[1]["description"], $movie_list[1]["genres"]); //creo un'istanza di classe "Movie"
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