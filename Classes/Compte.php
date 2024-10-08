<?php

class Compte{
    private string $libelle;
    private float $solde;
    private string $devise;
    private Client $client;
    

    public function __construct(string $libelle, float $solde, string $devise, Client $client){
        $this -> libelle = $libelle;
        $this -> solde = $solde;
        $this -> devise = $devise;
        $this -> client = $client;
        $this -> client -> recupererComptes($this);
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

    public function depotArgent(float $montant){
        $result = $this -> solde += $montant;
        return "Votre $this->libelle possède maintenant $result $this->devise";
    }

    public function retraitArgent(float $montant){
        $result = $this->solde;
        if ($result >= $montant){
            $result -= $montant;
            return "Vous venez de retirer $montant $this->devise. Vous avez $result $this->devise sur votre $this->libelle. ";
        } else {
            return "Vous ne pouvez pas retirer $montant $this->devise car votre $this->libelle a atteint son plafond de retrait.";
        }
    }

    public function virement($montant){
        
    }


}