<?php
class Role{
    private string $nomDuRole;

    public function __construct($nomDuRole){
        $this -> nomDuRole = $nomDuRole;
    }


    public function getNomDuRole(): string
    {
        return $this->nomDuRole;
    }


    public function setNomDuRole($nomDuRole)
    {
        $this->nomDuRole = $nomDuRole;
    }

    public function __tostring(){
       return $this -> nomDuRole;
    }
}


?>