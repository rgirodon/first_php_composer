<?php
namespace Dta\Firstcomposer\Domain;

class Team {

    public $name;
    
    public function __construct($name){
        
        $this->name = $name;
    }
}

