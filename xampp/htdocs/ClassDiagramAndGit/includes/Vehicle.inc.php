<?php

/**
 * Description of Vehicle
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
class Vehicle {
    private $brand; // Ford
    private $color;
    private $tone = "Honk honk!";
    protected $type = "Vehicle"; // #
    private $name;
    
    public function __construct($brand, $color, $name) {
        $this->brand = $brand;
        $this->color = $color;
        $this->name = $name;
    }
    function getTone() {
        return $this->tone;
    }

    function getType() {
        return $this->type;
    }

    function setType($type) {
        $this->type = $type;
    }

    public function __toString() {
        $s = sprintf("Type: %s<br />\nBrand: %s<br/>\nName: %s<br/>\nTone: %s<br/>\n", 
                     $this->type, $this->brand, $this->name, $this->tone);
        return $s;
    }
    
    public function honk() {
        return sprintf("<p>%s</p>\n", 
                       $this->getType(), $this->getTone());
    }
    
    public function whoami() {
        return $this->name;
    }
}
