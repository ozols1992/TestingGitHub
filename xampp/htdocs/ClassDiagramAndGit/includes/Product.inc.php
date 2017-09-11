<?php

/**
 * Description of Product
 *
 * @author Marianne Nielsen
 * @date 11-09-2017
 */
abstract class Product {
    protected $type = 'Product';
    protected $title;
    
   // No constructor in abstract classes! 
    
    function getTitle() {
        return $this->title;
    }

    public function getProductType() {
        return $this->type;
    }
 
    abstract public function display();
}
