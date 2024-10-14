<?php 

class Personne{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected Datetime $birthdate;


    public function __construct(string $name, string $surname, string $gender, $birthdate){
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> gender = $gender;
        $this -> birthdate = new DateTime($birthdate);
    }

    public function getName() : string
    {
        return $this->name;
    }


    public function setName($name) 
    {
        $this->name = $name;
    }


    public function getSurname() : string
    {
        return $this->surname;
    }


    public function setSurname($surname)
    {
        $this->surname = $surname;
    }


    public function getGender() : string
    {
        return $this->gender;
    }


    public function setGender($gender)
    {
        $this->gender = $gender;
    }


    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }


    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

    }


    public function __tostring(){
        return $this -> surname ." ". $this -> name ;
    }
}
?>