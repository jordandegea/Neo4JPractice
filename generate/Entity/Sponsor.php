<?php
namespace Entity;

use Entity\Link\Aide;

class Sponsor{
    public $nom;

    public $aide;

    public function __construct($nom){
    	$this->nom = $nom;
    }

    public function setAide(Liste $liste){
    	$this->aide = new Aide($liste);
    }
}