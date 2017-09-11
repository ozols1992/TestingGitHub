<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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