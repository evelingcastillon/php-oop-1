<?php
class Movie {
    
    public $title;
    public $desc;

    /**
     * Movie construct
     * @param string $title Nome del film
     * @param string $desc Descrizione del film
     */
    function __construct(string $title, string $desc) {
        $this->title = $title;
        $this->desc = $desc;
    }
}

$movies = [
    new Movie('Ritorno al futuro', 'asdasd asdasd asd asdasd asdasd asd'),
    new Movie('Greace', 'asdasd asdasd asd asdasd asdasd asd')
];

var_dump($movies);