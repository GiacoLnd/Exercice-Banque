<?php

class Compte{
    private string $libelle;
    private float $solde;
    private string $devise;
    private Client $client;
    

    public function __construct(string $libelle, float $solde, string $devise, Client $client){
        $this -> libelle = $libelle;
        $this -> solde = 0.00;
        $this -> devise = $devise;
        $this -> client = $client;
        $this -> client -> afficherComptes($this);
    }

    
    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle) : string
    {
        $this->libelle = $libelle;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire) : array
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde) : float
    {
        $this->solde = 0.00;

        return $this;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    public function setDevise($devise) : float
    {
        $this->devise = $devise;

        return $this;
    }

    public function depotArgent($montant){
        $this -> solde += $montant;
        return "Votre $libelle a été crédité de $this->$montant. Votre dépot est de $this->solde.<br> ";
    }

    public function retraitArgent($montant){
        $result = $this->solde;
        if ($this->solde >= $montant){
            return $result = $this -> solde -= $montant;
        }

    }


}