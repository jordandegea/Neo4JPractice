<?php
namespace Entity\Link;

use Entity\Ecole;

class AppartientListeEcole{
    public $ecole;

    public function __construct(Ecole $ecole)
    {
        $this->ecole = $ecole;
    }

    /**
     *
     */
    public function export(){
        return "";
    }
}