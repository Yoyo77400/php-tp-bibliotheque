<?php

class Livre 
{
    private string $titre;
    private string $auteur;
    private string $publication;
    private int $isbn;
    private string | bool $disponibilite;

    public function __construct (string $titre, string $auteur, string $publication, int $isbn, bool $disponibilite)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->publication = $publication;
        $this->isbn = $isbn;
        $this->disponibilite = $disponibilite;
    }

    public function getTitre() : string 
    {
        return $this->titre;
    }
    public function setTitre($titre) : void 
    {
        $this->titre = $titre;
    }
        public function getAuteur() : string 
    {
        return $this->auteur;
    }
    public function setAuteur($auteur) : void 
    {
        $this->auteur = $auteur;
    }
        public function getPublication() : string 
    {
        return $this->publication;
    }
    public function setPublication($publication) : void 
    {
        $this->publication = $publication;
    }
        public function getIsbn() : int 
    {
        return $this->isbn;
    }
    public function setIsbn($isbn) : void 
    {
        $this->isbn = $isbn;
    }
        public function getDisponibilite() : string | bool 
    {
        return $this->disponibilite;
    }
    public function setDisponibilite($disponibilite) : void 
    {
        $this->disponibilite = $disponibilite;
    }
}

class Bibliotheque
{
    private array $livres = [];

    public function addBook($livre)
    {
        array_push($this->livres, $livre);
    }
    public function getLivres() : array
    {
        return $this->livres;
    }
    public function getLivresDisponibles()
    {   
        $livresDisponibles = [];
        foreach($this->livres as $key => $value)
        if($value->getDisponibilite() === true)
        {
            array_push($livresDisponibles, $value);
        }
        return $livresDisponibles;
    }
    public function rechercheAuteur()
    {
        foreach($this->livres as $key => $value)
        {
            $value->auteur;
        }
    }
    public function rechercheTitre()
    {
        
    }
}



$livre0 = new Livre("Harry Potter et le prisonnier d'Azkaban", "J. K. Rowling", "12/10/23", 9780758756626, true);
$livre1 = new Livre("Harry Potter Tome 1 : Harry Potter à l'école des sorciers", "J. K. Rowling", "12 Octobre 2017", 9782070584628, false);
$livre2 = new Livre("Le seigneur des anneaux Tome 1 : la fraternité de l'anneau", "J.R.R. Tolkien", "3 Octobre 2019", 9782075134040, true);
$livre3 = new Livre("Les misérables", "Victor Hugo", "9 Janvier 2019", 9782211238465, false);

$bibliotheque0 = new Bibliotheque;

$bibliotheque0->addBook($livre0);
$bibliotheque0->addBook($livre1);
$bibliotheque0->addBook($livre2);
$bibliotheque0->addBook($livre3);

var_dump($bibliotheque0->getLivresDisponibles());