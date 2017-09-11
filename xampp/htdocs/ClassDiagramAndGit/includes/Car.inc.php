<?php

/**
 * Description of Car
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
class Car extends Vehicle {
    protected $doors;
    protected $trailer;
    
    public function __construct($brand, $color, $name, $doors, $trailer) {
        parent::__construct($brand, $color, $name); // then we know it exist
        $this->doors = $doors;
        $this->trailer = $trailer;
        $this->setType('Car');
    }
    
    public function __toString() {
        return sprintf("%s Doors: %s <br />\nTrailer: %s\n"
                , parent::__toString()
                , $this->getDoors()
                , $this->getTrailer() ? 'Yes' : 'No');
    }
    
    function getDoors() {
        return $this->doors;
    }

    function getTrailer() {
        return $this->trailer;
    }
}