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

$movies = [
    new Movie('VAN GOGH – SULLA SOGLIA DELL’ETERNITÀ', 'Forse Dio mi fa dipingere per quelli che nasceranno” dice Van Gogh (Willem Dafoe) al prete confessore durante il suo soggiorno volontario alla Maison de Santé di Saint-Paule-de-Mausole.','Biografico', 2010),
    new Movie('SULLA MIA PELLE', 'Una storia vera che ha toccato nel profondo la cronaca italiana e che continua a suscitare dibattito; un film che non sta facendo altro che fomentare la discussione sul tema.','Drammatico', 2012),
    new Movie('PREFERISCO IL PARADISO', 'Commovente fiction Rai sulla vita di uno dei Santi più amati di sempre: Pippo il Buono, ossia Filippo Neri, interpretato da un insolito Gigi Proietti.','Biografico', 2015),
    new Movie('BOHEMIAN RHAPSODY', 'Un film brillantemente realizzato. Bryan Singer ci narra della storia dei Queen soffermandosi particolarmente (ed inevitabilmente) sulla vita di Freddie Mercury, evitando sapientemente festival Hollywoodiano.', 'Biografico', 2010),
    new Movie('THE FOUNDER', 'Arguto film biografico sapientemente diretto da John Lee Hancock, il quale ci racconta la vita di Ray Kroc, colui che negli anni ’50 lanciò la celebre catena di fast food McDonald’s.','Biografico', 2015),
    new Movie('VITTORIA E ABDUL', 'Il ruolo fondamentale, la regina Vittoria, è interpretato dalla bravissima Judi Dench: una regina che sin dall’inizio della storia appare demotivata.','Biografico', 1995)
];

var_dump($movies);
