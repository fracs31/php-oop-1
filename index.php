<!-- PHP -->
<?php
    require_once __DIR__ . "./database/db.php"; //importo il database
    require_once __DIR__ . "./models/Movie.php"; //includo la classe "Movie"
    $movies_list = []; //lista di film
    //Ciclo
    for ($i = 0; $i < count($movies); $i++) {
        $movies_list[$i] = new Movie($movies[$i]["image"], $movies[$i]["title"], $movies[$i]["original_title"], $movies[$i]["country"], $movies[$i]["description"], $movies[$i]["genres"]); //prendo i dati dal finto database e li salvo in un array
    }

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
    <!-- Main -->
    <main class="main-content">
        <!-- Container -->
        <div class="container">
            <!-- Lista dei film -->
            <ul class="list">
                <!-- PHP -->
                <?php
                    //Ciclo
                    for ($i = 0; $i < count($movies_list); $i++) {
                        echo "<li class='list-item'>"; //elemento della lista
                        echo "<div class='card'>"; //carta
                        echo "<div class='card__head'>"; //testa della carta
                        echo "<img class='card__image' src='" . $movies_list[$i]->getImage() . "'>"; //immagine del carta
                        echo "</div>"; //fine della testa della carta
                        echo "<div class='card__body'>"; //corpo della carta
                        echo "<h2 class='card__title'>" . $movies_list[$i]->getTitle() . "</h2>"; //titolo
                        echo "<h3 class='card__original-title'>" . $movies_list[$i]->getOriginalTitle() . "</h3>"; //titolo originale
                        echo "<h4 class='card__description'>" . $movies_list[$i]->getDescription() . "</h4>"; //descrizione
                        echo "<h4 class='card__country'>" . $movies_list[$i]->getCountry() . "</h4>"; //paese
                        echo "<h4 class='card__genres'>"; //generi
                        $genres = $movies_list[$i]->getGenres(); //prendo i generi del film
                        //Ciclo
                        for ($j = 0; $j < count($genres); $j++) {
                            echo "<span class='card__genres--genre'>" . $genres[$j] . "</span>"; //stampo i generi del film
                        }
                        echo "</h4>"; //fine generi
                        echo "</div>"; //fine del corpo della carta
                        echo "</div>"; //fine della carta
                        echo "</li>"; //fine dell'elemento della lista
                    }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>