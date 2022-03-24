<?php

class weight {
    private $kg;
    function __construct($kg){
        $this->$kg = $kg;
    }
    public function toPounds(){
        return $this->kg * 2.20462;
    }
}