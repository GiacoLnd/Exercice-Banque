<?php

class Client{
    private string $nom;
    private string $prenom;
    private string $naissance;
    private string $ville;
    private array $comptes;

public function __construct(string $nom, string $prenom,string $naissance, string $ville){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> naissance = $naissance;
        $this -> ville = $ville;
        $this -> comptes = [];
}

public function getNom(): string
    {
        return $this->nom;
    }


public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

public function getPrenom(): string 
    {
        return $this->prenom;
    }


public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }


public function getNaissance(): string
    {
        return $this->naissance;
    }


public function setNaissance( $naissance)
    {
        $this->naissance = $naissance;
    }


public function getVille(): string
    {
        return $this->ville;
    }


public function setVille(string $ville)
    {
        $this->ville = $ville;
    }
public function getComptes(): array
{
        return $this->comptes;
}

public function setComptes(array $comptes)
{
        $this->comptes = $compte;
}

function calculteAge(): int{
    $dateNaissance = date("Y", strtotime($this->naissance));
    $annee = date("Y");
    $age = $annee - $dateNaissance; 
    return $age;
}



    public function __tostring(){
        return $this -> nom." ".$this->prenom." ".$this->ville." ". $this->calculteAge()." ans";
    }

public function recupererComptes(Compte $compte){
        $this -> comptes[] = $compte;
    }


public function afficherComptes(){
        $result = "<h3> Information Client : $this </h3> <br>";
        foreach ($this -> comptes as $compte){
            $result .= "$compte<br>";
        }
        return $result;

        }

}




?>