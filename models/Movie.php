<?php

//definire la classe Movie

class Movie{

    // inserire le caratteristiche tipiche -> variabili d'istanza
    public $title;
    public $language;
    public $genre;
    public $director;
    public $runningTime;

    //definire un costruttore all'interno della classe
    public function __construct($_title, $_language, $_genre, $_director, $_runningTime){
        $this->title = $_title;
        $this->language = $_language;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->runningTime = $_runningTime;
    }

    //inserire un metodo -> capacità condivisa
    public function getTitle(){
        
        // ritorno il titolo del film
        return $this->title;
    }

}