<?php
namespace Entity;

class SOS{

    public $nom;
    public $prix;
    public $cout;

    public function __construct($nom, $prix, $cout){
    	$this->nom = $nom;
    	$this->prix = $prix;
    	$this->cout = $cout;
    }
}