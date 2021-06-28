<?php
class Movie {
    
    public $title;
    public $desc;
    public $genere;
    public $anno;

    /**
     * Movie construct
     * @param string $title Nome del film
     * @param string $desc Descrizione del film
     */
    function __construct(string $title, string $desc, string $genere, int $anno) {
        $this->title = $title;
        $this->desc = $desc;
        $this->genere = $genere;
        $this->anno = $anno;
    }
}
