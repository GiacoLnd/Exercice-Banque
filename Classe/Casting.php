<?php
Class Casting{
    private Acteur $acteur;
    private Film $film;
    private Role $role;

    public function __construct(Acteur $acteur, Film $film, Role $role){
        $this -> acteur = $acteur;
        $this -> film = $film;
        $this -> role = $role;
    }





}


?>