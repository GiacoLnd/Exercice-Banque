<?php

class Client{
    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private string $ville;
    private array $libele;

    public function __construct(string $nom, string $prenom,string $naissance, string $ville){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> naissance = new DateTime ($naissance);
        $this -> ville = $ville;
        $this -> libele = [];
    }

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom(string $nom) : string
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom(string $prenom): string
    {
        $this->prenom = $prenom;
    }


    public function getNaissance()
    {
        return $this->naissance->format('d-m-Y');
    }


    public function setNaissance(string $naissance) : string
    {
        $this->naissance = $naissance;
    }


    public function getVille()
    {
        return $this->ville;
    }


    public function setVille(string $ville) : string
    {
        $this->ville = $ville;
    }


    public function getComptes()
    {
        return $this->comptes;
    }


    public function setComptes(Compte $comptes)
    {
        $this->comptes = $comptes;
    }
    
    public function __tostring(){
        return $this -> nom." ".$this->prenom."<br>";
    }

    public function recupererComptes(Compte $compte){
        $this -> comptes[] = $compte;
    }

    public function calculerAge(){
        
    }

    public function afficherComptes(){
        $result = "<h3> Information Client : <br>";



}




?>