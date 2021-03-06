<?php
namespace Entity\Link;

use Entity\SOS;

class ADemande{
    public $nombre;

    public $SOS;

    public function __construct(SOS $SOS, $nombre){
        $this->nombre = $nombre;
        $this->SOS = $SOS;
    }

    /**
     *
     */
    public function export($person){
	$name = $person->fullName();
        return "CREATE ($name)-[:A_DEMANDE {nombre: $this->nombre}]->({$this->SOS->nom})\n";
    }
}
