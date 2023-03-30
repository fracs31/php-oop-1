<?php
//Classe "Movie"
class Movie {
    public $title; //titolo
    public $original_title; //titolo originale
    public $country; //paese
    public $description; //descrizione
    public $genres; //generi
    //Costruttore
    public function __construct($title, $original_title, $country, $description, $genres) {
        $this->title = $title; //titolo
        $this->original_title = $original_title; //titolo originale
        $this->country = $country; //paese
        $this->description = $description; //descrizione
        $this->genres = $genres; //generi
    }
    //Metodo per ottenere il titolo
    public function getTitle() {
        return $this->title; //restituisco il titolo
    }
    //Metodo per ottenere il titolo originale
    public function getOriginalTitle() {
        return $this->title; //restituisco il titolo originale
    }
    //Metodo per ottenere il paese
    public function getCountry() {
        return $this->country; //restituisco il paese
    }
    //Metodo per ottenere la descrizione
    public function getDescription() {
        return $this->description; //restituisco la descrizione
    }
    //Metodo per ottenere i generi
    public function getGenres() {
        return $this->genres; //restituisco i generi
    }
    //Metodo per impostare il titolo
    public function setTitle($title) {
        $this->title = $title; //imposto il titolo
    }
    //Metodo per impostare il titolo originale
    public function setOriginalTitle($original_title) {
        $this->original_title = $original_title; //imposto il titolo originale
    }
    //Metodo per impostare il paese
    public function setCountry($country) {
        $this->country = $country; //imposto il paese
    }
    //Metodo per impostare la descrizione
    public function setDescription($description) {
        $this->description = $description; //imposto la descrizione
    }
    //Metodo per impostare i generi
    public function setGenres($genres) {
        $this->genres = $genres; //imposto i generi
    }
}
?>