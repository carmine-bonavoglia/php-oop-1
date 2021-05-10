<?php

ini_set('display_errors', 1);

class Movie {

    public $titolo;
    public $durata;
    public $regia;
    public $cast;
    public $paeseProduzione;
    public $annoProduzione;
    public $genere;
    public $audio;
    public $visioneMinori = true;
    public $descrizione;
    public $poster;


    //Costruttore classe
    public function __construct($_titolo){
        $this -> titolo = $_titolo;
    }

    //Metodi get e set
    public function setVisione($_genere){
        if($_genere == 'horror' && $_genere == 'drammatico' && $_genere == 'Thriller'){
            $this -> genere = $_genere;
            $this -> visioneMinori = false;
        } else {
            $this -> genere = $_genere;
        }
    }

    public function getVisione(){
        return $this -> visioneMinori;
    }
}

//Film di esempio
$movie = new Movie('John Wick');
$movie -> durata = 97;
$movie -> regia = ['David Leitch', 'Chad Stahelski'];
$movie -> cast = ['Keanu Reeves', 'Adrianne Palicki', 'Willem Dafoe', 'Alfie Allen', 'Dean Winters', 'Michael Nyqvist', 'David Patrick Kelly'];
$movie -> paeseProduzione = 'USA';
$movie -> annoProduzione = '2014';
$movie -> genere = 'Azione';
$movie -> audio = ['ITA', 'ENG'];
$movie -> setVisione('azione');
$movie -> descrizione = 'John Wick, l\'Uomo Nero, interpretato da Keanu Reeves è un ex killer che ha voltato pagina e cominciato una nuova vita con sua moglie Helen. Ma pochi anni dopo Helen muore a causa di una malattia, lasciandogli un cucciolo di cane, a cui John si affeziona in ricordo della moglie. Quando una notte dei balordi si introducono in casa di John, uccidono la cagnolina e rubano la sua adorata auto, l\'Uomo Nero è costretto a tornare sui suoi passi e affrontare i fantasmi del passato.';
$movie -> poster = 'img/poster.jpg';
