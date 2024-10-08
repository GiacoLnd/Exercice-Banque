<?php

class Client{
    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $nom, string $prenom,string $naissance, string $ville, string $comptes){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> naissance = new DateTime ($naissance);
        $this -> ville = $ville;
        $this -> comptes = [];
    }

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getNaissance()
    {
        return $this->naissance->format('d-m-Y');
    }


    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;
    }


    public function getVille()
    {
        return $this->ville;
    }


    public function setVille($ville)
    {
        $this->ville = $ville;
    }


    public function getComptes()
    {
        return $this->comptes;
    }


    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }
    
    public function __toString(){
        return $this -> nom ." ". $this -> prenom." ". $this -> naissance ." ". $this -> ville ." ". $this -> comptes;
    }
    public function afficherComptes(Compte $compte){
        $this -> comptes[] = $compte;
    }


}




?>