<?php
namespace Entity\Link;


use Entity\SOS;


class Propose{
    public $sos;

    public function __construct(SOS $sos)
    {
        $this->sos = $sos;
    }

    /**
     *
     */
    public function export($liste){
        return "CREATE ($liste->nom)-[:PROPOSE]->({$this->sos->nom})\n";
    }
}
