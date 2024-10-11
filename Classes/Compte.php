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

    public function setLibelle($libelle) 
    {
        $this->libelle = $libelle;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = 0.00;
    }

    public function getDevise(): string
    {
        return $this->devise;
    }

    public function setDevise($devise)
    {
        $this->devise = $devise;
    }
    
    public function getClient() : string
    {
        return $this->client;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }
    public function __tostring(){
        return $this->libelle ." ". $this -> solde ." ". $this->devise;
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

   public function crediter($montant){   
    $this->solde += $montant;
   }
   public function debiter($montant){
    $result = $this->solde;
    if ($result >= $montant){
        $result -= $montant;
        return  $result; 
    } else {
        return "Pas assez de fonds";
    }
    }   

    public function VirementCompte($compteDebiteur, $compteCrediteur, $montant){
        if ($compteDebiteur -> debiter($montant)){
           $compteCrediteur -> crediter($montant);
           return "Virement effectue avec succes d'un montant de $montant";
       } else {
        return "Pas assez de fonds";
       }  
    }
   

    }

