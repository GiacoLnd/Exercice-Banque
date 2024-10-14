<?php
class Film{
    private string $titre;
    private string $synopsis;
    private int $dateDeSortie;
    private int $duree;
    private Genre $genre;

    public function __construct(string $titre, string $synopsis,int $dateDeSortie, int $duree, Genre $genre){
        $this -> titre = $titre;
        $this -> synopsis = $synopsis;
        $this -> dateDeSortie = $dateDeSortie;
        $this -> duree = $duree;
        $this -> genre = $genre;
        $this -> genre -> recupererFilms($this);
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

    }


    public function getSynopsis()
    {
        return $this->synopsis;
    }


    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }


    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }


    public function setDateDeSortie($dateDeSortie)
    {
        $this->dateDeSortie = $dateDeSortie;
    }


    public function getDuree()
    {
        return $this->duree;
    }


    public function setDuree($duree)
    {
        $this->duree = $duree;
    }


    public function getGenre()
    {
        return $this->genre;
    }


    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;
    }


    public function __tostring(){
        return ".$this -> titre";
    }











}



?>