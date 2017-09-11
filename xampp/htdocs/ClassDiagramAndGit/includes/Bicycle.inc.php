<?php

/**
 * Description of Bicycle
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
class Bicycle extends Vehicle {
  
    public function __construct($brand, $color, $name) {
        parent::__construct($brand, $color, $name);
        $this->setType('Bicycle');
    }
}