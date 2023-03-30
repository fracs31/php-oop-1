<!-- PHP -->
<?php
    require_once __DIR__ . "./database/db.php"; //importo il database
    require_once __DIR__ . "./models/Movie.php"; //includo la classe "Movie"
    $movie1 = new Movie($movies[0]["title"], $movies[0]["original_title"], $movies[0]["country"], $movies[0]["description"], $movies[0]["genres"]); //creo un'istanza di classe "Movie"
    $movie2 = new Movie($movies[1]["title"], $movies[1]["original_title"], $movies[1]["country"], $movies[1]["description"], $movies[1]["genres"]); //creo un'istanza di classe "Movie"
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
                <!-- Elemento della lista -->
                <li class="list-item">
                    <!-- Carta -->
                    <div class="card">
                        <!-- Testa della carta -->
                        <div class="card__head">
                        <!-- Immagine della carta -->
                            <img class="card__image" src="https://www.stardust.it/uploads/img/movie/poster/84a60b3a20d20ec90cacca62641848591555193011-1000w.jpg" alt="Ritorno al futuro">
                        </div>
                        <!-- Corpo della carta -->
                        <div class="card__body">
                            <!-- Titolo -->
                            <h2 class="card__title">
                                Ritorno al futuro
                            </h2>
                            <!-- Titolo originale -->
                            <h3 class="card__original-title">
                                Back to The Future
                            </h3>
                            <!-- Descrizione -->
                            <h4 class="card__description">
                                Lorem Ipsum
                            </h4>
                            <!-- Paese -->
                            <h4 class="card__countru">
                                USA
                            </h4>
                            <h4 class="card__genres">
                                <span>
                                    Azione
                                </span>
                                <span>
                                    Avventura
                                </span>
                            </h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>