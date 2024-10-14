<?php


class Genre{
    private string $nomDuGenre;
    private array $films;

    public function __construct(string $nomDuGenre){
        $this -> nomDuGenre = $nomDuGenre;
        $this -> films = [];
    }


    public function getNomDuGenre(): string
    {
        return $this->nomDuGenre;
    }


    public function setNomDuGenre($nomDuGenre)
    {
        $this->nomDuGenre = $nomDuGenre;
    }


    public function getFilms(): array  
    {
        return $this -> films;
    }


    public function setFilms(array $films)
    {
        $this -> films = $film;
    }


    public function recupererFilms(Film $film){
        $this -> films[] = $film;
    }
    
    public function __tostring()         
        {
     return $this -> nomDuGenre;
    }

    public function afficherParGenre()  {
        $result = "<h2>$this :</h2>";
        foreach ($this->films as $film){
            $result .= "<br>". $film->getTitre();
        }
        return $result;
    }
}
?>