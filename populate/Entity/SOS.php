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

    /**
     *
     */
    public function export(){
        return "CREATE($this->nom:SOS {nom:'$this->nom', prix:$this->prix, cout:$this->cout})\n";
    }
}
