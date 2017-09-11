<?php

/**
 * Description of Truck
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
class Truck extends Vehicle {
    private $wheels;
    
    public function __construct($brand, $color, $name, $wheels) {
        parent::__construct($brand, $color, $name); // then we now it exist
        $this->wheels = $wheels;
        $this->setType('Truck');
    }
    
    public function getWheels() {
        return $this->wheels;
    }
    
    public function __toString() {
        return sprintf("%s Wheels: %s\n"
                , parent::__toString()
                , $this->getWheels());
    }
}